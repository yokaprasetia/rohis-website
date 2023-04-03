<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | FAQ',
            'subjudul' => 'FAQ',
            'active' => 'faq'
        ];

        return view('page/faq', $data);
    }
}
