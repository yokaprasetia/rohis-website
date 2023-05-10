<?php

namespace App\Controllers;

use App\Models\LogAktivitasModel;
use App\Models\UserModel;
use App\Models\LogAktivitasModelModel;
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
}
