<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SiROHIS | Login'
        ];

        return view('login', $data);
    }
}
