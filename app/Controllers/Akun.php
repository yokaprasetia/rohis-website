<?php

namespace App\Controllers;

use App\Models\LogAktivitasModel;
use App\Models\UserModel;
use CodeIgniter\Files\File;
use CodeIgniter\I18n\Time;


class Akun extends BaseController
{
    public function index()
    {
        $session = session();
        $modelUser = new UserModel();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        // BUAT ROLE VALIDATION TAMBAH
        $data_email = [];
        foreach ($modelUser->select('email')->findAll() as $email) {
            $data_email[] = $email['email'];
        }

        $data = [
            'judul' => 'SiROHIS | Akun',
            'subjudul' => 'Akun',
            'active' => 'akun',
            'role' => $role,
            'database' => $modelUser->orderBy('status ASC, nama ASC')->findAll(),
            'data_email' => $data_email,
        ];

        return view('page/akun', $data);
    }

    public function detail($id)
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelUser = new UserModel();
        $data = [
            'judul' => 'SiROHIS | Detail Akun',
            'subjudul' => 'Detail Akun',
            'active' => 'akun',
            'role'  => $role,
            'detail' => $modelUser->where('id', $id)->first(),
        ];

        return view('page/detailAkun', $data);
    }

    public function tambah()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $data = $this->request->getVar();
        $data['status'] = 'Aktif'; // karena akun yang ditambahkan pasti aktif

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        // Enkripsi Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $proses = $modelUser->save($data);
        if ($proses) {
            $session->setFlashdata('success', 'Berhasil Ditambahkan!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => '<i>(nim)</i> ' . $data['nim'],
                'aksi'              => 'Tambah Akun Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Ditambahkan!');
            return redirect()->to('/akun');
        }
    }

    public function import()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        $file_excel = $this->request->getFile('fileUpload');
        $ekstensi = $file_excel->getClientExtension();

        if (strtolower($ekstensi) == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } elseif (strtolower($ekstensi) == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } elseif (strtolower($ekstensi) == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        }

        $spreadsheet = $reader->load($file_excel);
        $data_excel = $spreadsheet->getActiveSheet()->toArray();

        // PENGECEKAN TERLEBIH DAHULU 
        foreach ($data_excel as $data => $row) {

            // Baris Pertama Tidak Diambil
            if ($data == 0) {
                continue;
            }

            // Ambil Data
            $data = [
                'nama'      => $row[1],
                'email'     => $row[2],
                'nim'       => $row[3],
                'no_hp'     => $row[4],
                'kelas'     => $row[5],
                'angkatan'  => $row[6],
                'role'      => 'Anggota',
                'password'  => password_hash($row[3], PASSWORD_DEFAULT),
                'status'    => 'Aktif',
            ];

            // Validasi Jika Barisnya Kosong & Tidak Berisi
            if (!isset($row[1]) && !isset($row[2]) && !isset($row[3]) && !isset($row[4]) && !isset($row[5]) && !isset($row[6])) {
                continue;
            }

            // Cek Nama, Email, dan NIM Harus Terisi
            if (isset($data['nama']) && isset($data['email']) && isset($data['nim'])) {
                // VALIDASI NAMA
                $rule_nama = "/^[a-zA-Z\s'-]{1,100}$/";
                if (!preg_match($rule_nama, $data['nama'])) {
                    $session->setFlashdata('error', 'Terdapat Nama Yang Tidak Valid!');
                    return redirect()->to('/akun');
                }

                // VALIDASI NIM
                $rule_nim = "/^[0-9]{9}$/";
                if (!preg_match($rule_nim, $data['nim'])) {
                    $session->setFlashdata('error', 'Terdapat NIM Yang Tidak Valid!');
                    return redirect()->to('/akun');
                }

                // VALIDASI EMAIL UNIK - SKIP AJA
                $cek_nim = $modelUser->where('nim', $data['nim'])->first();
                if ($cek_nim) {
                    continue;
                } else {
                    $proses = $modelUser->save($data);
                }
            } else {
                $session->setFlashdata('error', 'Pastikan Nama, Email, dan NIM setiap anggota harus terisi!');
                return redirect()->to('/akun');
            }
        }

        // Buat Log Aktivitas
        if (isset($proses)) {
            $session->setFlashdata('success', 'Berhasil Diimport!');

            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => '<i>(tidak ada)</i> ',
                'aksi'              => 'Import Data User'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Diimport!');
        }
    }

    public function downloadFile($nama_file)
    {
        $session = session();
        $modelLogAktivitas = new LogAktivitasModel();

        if (!empty($nama_file)) {
            $fileName = basename($nama_file);
            $filePath = './example-import/' . $fileName;

            if (!empty($nama_file) && file_exists($filePath)) {
                // Define Headers
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");

                // Read the file
                readfile($filePath);

                // Buat Log Aktivitas
                $data_log = [
                    'nama_user'         => session()->get('nama'),
                    'nim'               => session()->get('nim'),
                    'jabatan'           => session()->get('role'),
                    'waktu'             => Time::now('Asia/Jakarta'),
                    'jenis_aktivitas'   => 'Menu Akun',
                    'id_aktivitas'      => '<i>(tidak ada)</i> ',
                    'aksi'              => 'Download template file excel'
                ];
                $modelLogAktivitas->save($data_log);

                exit;
            } else {
                $session->setFlashdata('error', 'File Tidak Ditemukan!');
                return redirect()->to('/akun');
            }
        }
    }

    public function prosesUbahProfil()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        // biar querinya jadi update, maka ID juga harus diikutsertakan dalam $data (update -> id yang di update sudah ada di database)
        $info = $this->request->getVar();
        $id_akun = $this->request->getVar('id');

        // ROLE VALIDATION TERPISAH DI BAGiAN JAVASCRIPT

        $proses = $modelUser->save($info);
        if ($proses) {
            $session->setFlashdata('success', 'Berhasil Diupdate!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => $id_akun,
                'aksi'              => 'Ubah Profil Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Diupdate!');
            return redirect()->to('/akun');
        }
    }

    public function prosesUbahPassword()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        // ROLE VALIDATION TERPISAH DI BAGiAN JAVASCRIPT

        $data = $this->request->getVar();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $proses = $modelUser->save($data);
        if ($proses) {
            $session->setFlashdata('success', 'Password Berhasil Diperbarui!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => $data['id'],
                'aksi'              => 'Ubah Password Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        }
    }

    public function prosesUbahStatus()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $data = $this->request->getVar();
        $proses = $modelUser->save($data);

        if ($proses) {
            $session->setFlashdata('success', 'Status Berhasil Diperbarui!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => $data['id'],
                'aksi'              => 'Ubah Status Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            if ($proses) {
                $session->setFlashdata('error', 'Status Gagal Diperbarui!');
                return redirect()->to('/akun');
            }
        }
    }

    public function delete($id)
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $delete = $modelUser->delete(['id' => $id]);
        if ($delete) {
            $session->setFlashdata('success', 'Berhasil Dihapus!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Akun',
                'id_aktivitas'      => $id,
                'aksi'              => 'Delete Akun Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/akun');
        }
    }
}
