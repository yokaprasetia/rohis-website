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

        $data = [
            'judul' => 'SiROHIS | Akun',
            'subjudul' => 'Akun',
            'active' => 'akun',
            'role' => $role,
            'database' => $modelUser->findAll(),
        ];

        return view('page/akun', $data);
    }

    public function tambah()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $data = $this->request->getVar();

        // cek apakah nim sudah ada di db
        $cek_nim = $modelUser->where('nim', $data['nim'])->first();
        if ($cek_nim) {
            $session->setFlashdata('error', 'Sudah Terdaftar!');
            return redirect()->to('/akun');
        } else {
            // cek konfirmasi password
            if ($data['password'] === $data['konfirmasi_password']) {

                // enkripsi password dulu
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
            } else {
                $session->setFlashdata('error', 'Konfirmasi Tidak Sesuai!');
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

    public function prosesUpdate()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        // biar querinya jadi update, maka ID juga harus diikutsertakan dalam $data (update -> id yang di update sudah ada di database)
        $info = $this->request->getVar();
        $proses = $modelUser->save($info);

        $id_akun = $this->request->getVar('id');

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
                'aksi'              => 'Update Akun Pengguna'
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/akun');
        } else {
            $session->setFlashdata('error', 'Gagal Diupdate!');
            return redirect()->to('/akun');
        }
    }

    // public function import()
    // {
    //     $session = session();
    //     $modelUser = new UserModel();
    //     $modelLogAktivitas = new LogAktivitasModel();

    //     $validate = [
    //         'fileUpload' => [
    //             'label' => 'File Upload',
    //             'rules' => [
    //                 'uploaded[fileUpload]',
    //                 'mime_in[fileUpload,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/csv]',
    //             ],
    //         ],
    //     ];

    //     if (!$this->validate($validate)) {
    //         $session->setFlashdata('error', 'Gagal Membaca Data, Pastikan Ekstensi Benar!');
    //         return redirect()->to('/akun');
    //     }

    //     $file_excel = $this->request->getFile('fileUpload');
    //     $ekstensi = $file_excel->getClientExtension();


    //     if ($ekstensi == 'xls') {
    //         $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    //     } elseif ($ekstensi == 'xlsx') {
    //         $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    //     } elseif ($ekstensi == 'csv') {
    //         $reader = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    //     }

    //     $data_excel = $reader->load($file_excel)->getActiveSheet()->toArray();

    //     foreach ($data_excel as $data => $row) {
    //         if ($data == 0) {
    //             continue;
    //         }

    //         $data = [
    //             'nama'      => $row[1],
    //             'email'     => $row[2],
    //             'nim'       => $row[3],
    //             'no_hp'     => $row[4],
    //             'kelas'     => $row[5],
    //             'angkatan'  => $row[6],
    //             'tingkat'   => $row[7],
    //             'role'      => 'Anggota',
    //             'password'  => password_hash($row[3], PASSWORD_DEFAULT)
    //         ];

    //         $cek_nim = $modelUser->where('nim', $data['nim'])->first();
    //         if ($cek_nim) {
    //             continue;
    //         } else {
    //             $proses = $modelUser->save($data);
    //         }
    //     }
    //     if (isset($proses)) {
    //         $session->setFlashdata('success', 'Berhasil Diimport!');

    //         // Buat Log Aktivitas
    //         $data_log = [
    //             'nama_user'         => session()->get('nama'),
    //             'nim'               => session()->get('nim'),
    //             'jabatan'           => session()->get('role'),
    //             'waktu'             => Time::now('Asia/Jakarta'),
    //             'jenis_aktivitas'   => 'Menu Akun',
    //             'id_aktivitas'      => '<i>(tidak ada)</i> ',
    //             'aksi'              => 'Import Data User'
    //         ];
    //         $modelLogAktivitas->save($data_log);

    //         return redirect()->to('/akun');
    //     } else {
    //         $session->setFlashdata('error', 'Gagal Diimport!');
    //     }
    // }

    // public function downloadFile($nama_file)
    // {
    //     $session = session();
    //     $modelLogAktivitas = new LogAktivitasModel();

    //     if (!empty($nama_file)) {
    //         $fileName = basename($nama_file);
    //         $filePath = './example-import/' . $fileName;

    //         if (!empty($nama_file) && file_exists($filePath)) {
    //             // Define Headers
    //             header("Cache-Control: public");
    //             header("Content-Description: File Transfer");
    //             header("Content-Disposition: attachment; filename=$fileName");
    //             header("Content-Type: application/zip");
    //             header("Content-Transfer-Encoding: binary");

    //             // Read the file
    //             readfile($filePath);

    //             // Buat Log Aktivitas
    //             $data_log = [
    //                 'nama_user'         => session()->get('nama'),
    //                 'nim'               => session()->get('nim'),
    //                 'jabatan'           => session()->get('role'),
    //                 'waktu'             => Time::now('Asia/Jakarta'),
    //                 'jenis_aktivitas'   => 'Menu Akun',
    //                 'id_aktivitas'      => '<i>(tidak ada)</i> ',
    //                 'aksi'              => 'Download template file excel'
    //             ];
    //             $modelLogAktivitas->save($data_log);

    //             exit;
    //         } else {
    //             $session->setFlashdata('error', 'File Tidak Ditemukan!');
    //             return redirect()->to('/akun');
    //         }
    //     }
    // }
}
