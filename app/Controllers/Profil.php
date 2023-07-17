<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LogAktivitasModel;
use CodeIgniter\I18n\Time;

class Profil extends BaseController
{

    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelUser = new UserModel();

        $id = $session->get('id');
        // $info = $modelUser->where('id', $id)->first();

        $data = [
            'judul'         => 'SiROHIS | Profil',
            'subjudul'      => 'Informasi Pribadi',
            'active'        => 'profil',
            'role'          => $role,
            'profil'        => $modelUser->where('id', $id)->first(),
        ];

        return view('page/profil', $data);
    }

    public function updateProfil()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        // biar querinya jadi update, maka ID juga harus diikutsertakan dalam $data (update -> id yang di update sudah ada di database)
        $info = $this->request->getVar();

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        $proses = $modelUser->save($info);
        if ($proses) {
            $session->setFlashdata('success', 'Berhasil Diupdate!');

            // Buat Log Aktivitas
            $data_log = [
                'nama_user'         => session()->get('nama'),
                'nim'               => session()->get('nim'),
                'jabatan'           => session()->get('role'),
                'waktu'             => Time::now('Asia/Jakarta'),
                'jenis_aktivitas'   => 'Menu Profile',
                'id_aktivitas'      => session()->get('id'),
                'aksi'              => 'Update User Profile',
            ];
            $modelLogAktivitas->save($data_log);

            return redirect()->to('/profil');
        } else {
            $session->setFlashdata('error', 'Gagal Diupdate!');
            return redirect()->to('/profil');
        }
    }

    public function updatePassword()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();

        $id = $session->get('id');
        $database = $modelUser->where('id', $id)->first();
        $info = $this->request->getVar();

        // ROLE VALIDATION TERPISAH DI BAGIAN JAVASCRIPT

        $verify = password_verify($info['passwordLama'], $database['password']);
        if ($verify) {
            $ubah = [
                'id' => $id,
                'password' => password_hash($info['passwordBaru'], PASSWORD_DEFAULT),
            ];
            $proses = $modelUser->save($ubah);
            if ($proses) {
                $session->setFlashdata('success', 'Berhasil Diubah!');

                // Buat Log Aktivitas
                $data_log = [
                    'nama_user'         => session()->get('nama'),
                    'nim'               => session()->get('nim'),
                    'jabatan'           => session()->get('role'),
                    'waktu'             => Time::now('Asia/Jakarta'),
                    'jenis_aktivitas'   => 'Menu Profile',
                    'id_aktivitas'      => session()->get('id'),
                    'aksi'              => 'Update User Password'
                ];
                $modelLogAktivitas->save($data_log);

                return redirect()->to('/profil');
            } else {
                $session->setFlashdata('error', 'Gagal Diubah!');
                return redirect()->to('/profil');
            }
        } else {
            $session->setFlashdata('error', 'Gagal, Password Lama Tidak Cocok!');
            return redirect()->to('/profil');
        }
    }
}
