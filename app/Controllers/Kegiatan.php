<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new PengumumanModel();

        $data = [
            'judul' => 'SiROHIS | Kegiatan',
            'subjudul' => 'Riwayat Kegiatan',
            'active' => 'kegiatan',
            'role'  => $role,
            'pengumuman' => $model->orderBy('updated_at', 'DESC')->findAll(),
        ];

        return view('page/Kegiatan', $data);
    }
}
