<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LogAktivitasModel;
use CodeIgniter\I18n\Time;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Login'
        ];

        return view('auth/login', $data);
    }

    public function proses()
    {
        $session = session();
        $modelUser = new UserModel();
        $modelLogAktivitas = new LogAktivitasModel();


        $email =  $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $modelUser->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $informasi = [
                    'id'         => $data['id'],
                    'nama'       => $data['nama'],
                    'email'      => $data['email'],
                    'nim'        => $data['nim'],
                    'role'       => $data['role'],
                    'logged_in'  => TRUE
                ];
                $session->set($informasi);
                $session->setFlashdata('success', 'Berhasil Login!');

                // Buat Log Aktivitas
                $data_log = [
                    'nama_user'         => session()->get('nama'),
                    'nim'               => session()->get('nim'),
                    'jabatan'           => session()->get('role'),
                    'waktu'             => Time::now('Asia/Jakarta'),
                    'jenis_aktivitas'   => 'Login',
                    'id_aktivitas'      => '<i>(tidak ada)</i>',
                    'aksi'              => 'Login'
                ];
                $modelLogAktivitas->save($data_log);

                return redirect()->to('/beranda');
            } else {
                $session->setFlashdata('error', 'Password Salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Email Tidak Ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $modelLogAktivitas = new LogAktivitasModel();

        $session->setFlashdata('success', session()->get('nama'));

        // Buat Log Aktivitas
        $data_log = [
            'nama_user'         => session()->get('nama'),
            'nim'               => session()->get('nim'),
            'jabatan'           => session()->get('role'),
            'waktu'             => Time::now('Asia/Jakarta'),
            'jenis_aktivitas'   => 'Logout',
            'id_aktivitas'      => '<i>(tidak ada)</i>',
            'aksi'              => 'Logout'
        ];
        $modelLogAktivitas->save($data_log);

        return redirect()->to('/login');
    }
}
