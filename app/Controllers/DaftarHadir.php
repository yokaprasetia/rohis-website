<?php

namespace App\Controllers;

use App\Models\UserModel;

class DaftarHadir extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/daftarHadir', $data);
    }
}
