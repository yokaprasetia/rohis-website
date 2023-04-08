<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];

        $warnaRandom = [$warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)]];

        $data = [
            'judul' => 'SiROHIS | FAQ',
            'subjudul' => 'FAQ',
            'active' => 'faq',
            'role' => $role,
            'warna' => $warnaRandom,
        ];

        return view('page/faq', $data);
    }
}
