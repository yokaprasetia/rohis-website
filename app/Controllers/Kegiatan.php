<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        $model = new PengumumanModel();

        $data = [
            'judul' => 'SiROHIS | Kegiatan',
            'subjudul' => 'Riwayat Kegiatan',
            'active' => 'kegiatan',
            'pengumuman' => $model->orderBy('upload_at', 'DESC')->findAll(),
        ];

        return view('page/Kegiatan', $data);
    }
}
