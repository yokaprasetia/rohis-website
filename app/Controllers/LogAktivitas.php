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

    public function delete()
    {
        $session = session();
        $modelLogAktivitas = new LogAktivitasModel();

        // cek apakah ada log aktivitas
        $log = $modelLogAktivitas->findAll();
        if (count($log) == 0) {
            $session->setFlashdata('error', 'Tidak Ditemukan!');
            return redirect()->to('/logAktivitas');
        }

        // Hapus seluruh data log aktivitas
        $delete = $modelLogAktivitas->truncate();
        if ($delete) {
            $session->setFlashdata('success', 'Berhasil Dihapus!');

            return redirect()->to('/logAktivitas');
        } else {
            $session->setFlashdata('error', 'Gagal Dihapus!');
            return redirect()->to('/logAktivitas');
        }
    }
}
