<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];

        $warnaRandom = [$warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)], $warna[array_rand($warna)]];

        $data = [
            'judul' => 'SiROHIS | FAQ',
            'subjudul' => 'FAQ',
            'active' => 'faq',
            'warna' => $warnaRandom,
        ];

        return view('page/faq', $data);
    }
}
