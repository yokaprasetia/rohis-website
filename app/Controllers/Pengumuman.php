<?php

namespace App\Controllers;

class Pengumuman extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Pengumuman',
            'subjudul' => 'Pengumuman',
            'active' => 'pengumuman'
        ];

        return view('page/pengumuman', $data);
    }
}
