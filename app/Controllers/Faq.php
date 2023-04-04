<?php

namespace App\Controllers;

use App\Models\UserModel;

class Faq extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new UserModel();

        $id = $session->get('id');
        $data = $model->where('id', $id)->first();

        $data = [
            'judul' => 'SiROHIS | FAQ',
            'subjudul' => 'FAQ',
            'active' => 'faq',
            'sidebarProfil' => $data['foto'],
        ];

        return view('page/faq', $data);
    }
}
