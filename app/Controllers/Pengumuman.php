<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pengumuman extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Pengumuman',
            'subjudul' => 'Pengumuman',
            'active' => 'pengumuman',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/pengumuman', $data);
    }
}
