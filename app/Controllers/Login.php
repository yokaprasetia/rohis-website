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
                    'role'       => $data['role'],
                    'logged_in'  => TRUE
                ];
                $session->set($informasi);
                $session->setFlashdata('success', 'Berhasil Login!');
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
        $nama = session()->get('nama');
        $session->setFlashdata('success', $nama);
        return redirect()->to('/login');
    }
}
