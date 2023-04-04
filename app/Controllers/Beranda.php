<?php

namespace App\Controllers;

use App\Models\UserModel;

class Beranda extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Beranda',
            'subjudul' => 'Beranda',
            'active' => 'beranda',
            'sidebarProfil' => $data['foto'],
        ];
        return view('page/beranda', $data);
    }
}
