<?php

namespace App\Controllers;

use App\Models\UserModel;

class Keuangan extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Keuangan',
            'active' => 'keuangan',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/keuangan', $data);
    }
}
