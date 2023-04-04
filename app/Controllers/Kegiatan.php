<?php

namespace App\Controllers;

use App\Models\UserModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | Kegiatan',
            'subjudul' => 'Riwayat Kegiatan',
            'active' => 'kegiatan',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/Kegiatan', $data);
    }
}
