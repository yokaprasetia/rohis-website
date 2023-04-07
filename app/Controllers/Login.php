<?php

namespace App\Controllers;

use App\Models\UserModel;

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
        $model = new UserModel();
        $email =  $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $informasi = [
                    'id'         => $data['id'],
                    'nama'       => $data['nama'],
                    'email'      => $data['email'],
                    'nim'        => $data['nim'],
                    'logged_in'  => TRUE
                ];
                $session->set($informasi);
                $session->setFlashdata('msg', 'Login Berhasil!');
                return redirect()->to('/beranda');
            } else {
                $session->setFlashdata('msg', 'Password Salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email Tidak Ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // $session = session();
        // $session->destroy();  -----> Sudah dilakukan pada halaman Login

        $session = session();
        $session->setFlashdata('logout', 'Logout berhasil');
        return redirect()->to('/login');
    }
}
