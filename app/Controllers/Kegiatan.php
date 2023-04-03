<?php

namespace App\Controllers;

class Kegiatan extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Kegiatan',
            'subjudul' => 'Riwayat Kegiatan',
            'active' => 'kegiatan'
        ];

        return view('page/Kegiatan', $data);
    }
}
