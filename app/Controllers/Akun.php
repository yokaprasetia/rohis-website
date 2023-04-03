<?php

namespace App\Controllers;

class Akun extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Akun',
            'subjudul' => 'Akun',
            'active' => 'akun'
        ];

        return view('page/akun', $data);
    }
}
