<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Profil',
            'subjudul' => 'Profil',
            'active' => 'profil',
            'sidebarProfil' => $data['foto'],
            'profil' => [
                'nama' => $data['nama'],
                'email' => $data['email'],
                'no_hp' => $data['no_hp'],
                'domisili' => $data['domisili'],
                'nim' => $data['nim'],
                'kelas' => $data['kelas'],
                'angkatan' => $data['angkatan'],
                'prodi' => $data['prodi'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'role' => $data['role'],
                'alamat_kost' => $data['alamat_kost'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'foto' => $data['foto'],
            ],
        ];

        return view('page/Profil', $data);
    }
}
