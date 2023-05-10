<?php

namespace App\Controllers;

use App\Models\LogAktivitasModel;

class LogAktivitas extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new LogAktivitasModel();
        $isi_db = $model->orderBy('waktu', 'DESC')->findAll();

        $data = [
            'judul' => 'SiROHIS | Log Aktivitas',
            'subjudul' => 'Log Aktivitas User',
            'active' => 'logAktivitas',
            'role'  => $role,
            'data' => $isi_db,
        ];

        return view('page/logAktivitas', $data);
    }
}
