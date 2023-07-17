<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LogAktivitasModel;
use CodeIgniter\I18n\Time;

class Login extends BaseController
{
    public function index()
    {
        $session = session();
        $modelUser = new UserModel();

        // BUAT ROLE VALIDATION TAMBAH
        $data_email = [];
        foreach ($modelUser->select('email')->findAll() as $email) {
            $data_email[] = $email['email'];
        }

        $data = [
            'judul' => 'SiROHIS | Login',
            'data_email' => $data_email,
        ];

        return view('page/login', $data);
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
            // Cek Status Akun
            if ($data['status'] == 'Tidak Aktif') {
                $session->setFlashdata('error', 'Akun Dinonakifkan!');
                return redirect()->to('/login');
            }

            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $informasi = [
                    'id'         => $data['id'],
                    'nama'       => $data['nama'],
                    'email'      => $data['email'],
                    'nim'        => $data['nim'],
                    'role'       => $data['role'],
                    'tingkat'    => $data['tingkat'],
                    'jenis_kelamin' => $data['jenis_kelamin'],
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
            $session->setFlashdata('error', 'Email Belum Terdaftar!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $modelLogAktivitas = new LogAktivitasModel();

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

        $_SESSION = [];
        session_unset();
        session_destroy();

        return redirect()->to('/login');
    }
}
