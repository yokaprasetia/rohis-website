<?php

namespace App\Controllers;

use App\Models\DaftarHadirModel;
use App\Models\PengumumanModel;

use CodeIgniter\I18n\Time;

class DaftarHadir extends BaseController
{
    public function index()
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();

        // Daftar kegiatan yang sudah terjadi - isBefore()
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

        // Cek kehadiran setiap kegiatan yang !AfterNow
        // Menggunakan variabel $daftar_kegiatan;
        $nim_user = $session->get('nim');

        $kehadiran = [];
        foreach ($daftar_kegiatan as $kegiatan) :
            $id_kegiatan = $kegiatan['id'];
            $proses = $modelDaftarHadir->where('id_kegiatan', $id_kegiatan)->findAll();
            if ($proses) {
                foreach ($proses as $p) :
                    if ($p['nim'] == $nim_user) {
                        $kehadiran[] = 'Hadir';
                    } else {
                    }
                endforeach;
            } else {
                $kehadiran[] = 'Tidak Hadir';
            }
        endforeach;




        // Cek kegiatan yang sedang berlangsung sameAs()
        $now = Time::now('Asia/Jakarta');
        $tanggal_sekarang = $now->toDateString();

        $cek_kegiatan_sekarang = $modelPengumuman->where('tanggal', $tanggal_sekarang)->first();
        if ($cek_kegiatan_sekarang) {
            $berlangsung = true;
            $kegiatan_berlangsung = $modelPengumuman->where('tanggal', $tanggal_sekarang)->first();
        } else {
            $berlangsung = false;
            $kegiatan_berlangsung = ''; // gak dipake
        }

        $data = [
            'judul' => 'SiROHIS | Daftar Hadir',
            'subjudul' => 'Daftar Hadir',
            'active' => 'daftarHadir',
            'daftar_kegiatan' => $daftar_kegiatan,
            'berlangsung' => $berlangsung,
            'kegiatan_berlangsung' => $kegiatan_berlangsung,
            'kehadiran' => $kehadiran,
        ];

        return view('page/daftarHadir', $data);
    }

    public function detail($id_kegiatan)
    {
        // Ambil Nama Kegiatan
        $modelPengumuman = new PengumumanModel();
        $pengumuman = $modelPengumuman->where('id', $id_kegiatan)->first();

        // Ambil Peserta yang hadir dari Kegiatan $id
        $modelDaftarHadir = new DaftarHadirModel();
        $peserta = $modelDaftarHadir->where('id_kegiatan', $id_kegiatan)->findAll();

        $data = [
            'judul' => 'SiROHIS | Detail Kehadiran',
            'subjudul' => 'Detail Kehadiran',
            'active' => 'daftarHadir',
            'kehadiran' => [
                'nama_kegiatan' => $pengumuman['nama'],
                'peserta' => $peserta,
            ]
        ];

        return view('page/detailKehadiran', $data);
    }
}
