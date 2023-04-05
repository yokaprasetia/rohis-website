<?php

namespace App\Controllers;

class Keuangan extends BaseController
{
    public function index()
    {

        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Keuangan',
            'active' => 'keuangan',
        ];

        return view('page/keuangan', $data);
    }
}
