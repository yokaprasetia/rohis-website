<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Beranda',
            'subjudul' => 'Beranda',
            'active' => 'beranda'
        ];

        return view('page/beranda', $data);
    }
}
