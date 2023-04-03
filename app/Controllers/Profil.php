<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Profil',
            'subjudul' => 'Profil',
            'active' => 'profil'
        ];

        return view('page/Profil', $data);
    }
}
