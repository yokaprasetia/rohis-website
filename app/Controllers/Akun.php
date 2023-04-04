<?php

namespace App\Controllers;

use App\Models\UserModel;

class Akun extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Akun',
            'subjudul' => 'Akun',
            'active' => 'akun',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/akun', $data);
    }
}
