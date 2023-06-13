<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

use CodeIgniter\I18n\Time;

class Kegiatan extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelPengumuman = new PengumumanModel();

        // FILTER KEGIATAN YANG TELAH TERJADI - isBefore() function
        $waktu_sekarang = Time::now('Asia/Jakarta');
        $semua_kegiatan = $modelPengumuman->orderBy('updated_at', 'DESC')->findAll();
        $daftar_kegiatan = [];
        foreach ($semua_kegiatan as $kegiatan) :
            $time = Time::parse($kegiatan['tanggal']);
            $proses = $time->isBefore($waktu_sekarang);
            if ($proses) {
                $daftar_kegiatan[] = $kegiatan;
            }
        endforeach;

        $data = [
            'judul' => 'SiROHIS | Kegiatan',
            'subjudul' => 'Riwayat Kegiatan',
            'active' => 'kegiatan',
            'role'  => $role,
            'pengumuman' => $daftar_kegiatan
        ];

        return view('page/kegiatan', $data);
    }
}
