<?php

namespace App\Controllers;


class DaftarHadir extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
        ];

        return view('page/daftarHadir', $data);
    }
}
