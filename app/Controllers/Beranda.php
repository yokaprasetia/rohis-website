<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KeuanganModel;
use App\Models\PengumumanModel;
use App\Models\QuotesModel;
use App\Models\DaftarHadirModel;

use CodeIgniter\I18n\Time;

class Beranda extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $modelUsers = new UserModel();
        $modelKeuangan = new KeuanganModel();
        $modelPengumuman = new PengumumanModel();
        $modelQuotes = new QuotesModel();
        $modelDaftarHadir = new DaftarHadirModel();

        //
        $warna = ['primary', 'secondary', 'danger', 'warning', 'success'];
        $warnaQuotes = $warna[array_rand($warna)];
        // Daftar Quotes
        $daftar_quotes = $modelQuotes->findAll();
        $quotes_random = $daftar_quotes[array_rand($daftar_quotes)];


        // Jumlah Pengguna
        $jumlah_pengguna = count($modelUsers->findAll());

        // Total Kas
        $kas_masuk = $modelKeuangan->where('jenis', 'Masuk')->findAll();
        $kas_keluar = $modelKeuangan->where('jenis', 'Keluar')->findAll();
        $total_kas = $modelKeuangan->hitung($kas_masuk, $kas_keluar);

        // Pengumuman Terbaru
        $pengumuman = $modelPengumuman->orderBy('updated_at', 'DESC')->first();


        // Presensi Kehadiran ======================================================

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
        $jumlah_kegiatan_before_now = count($daftar_kegiatan);
        $nim_pengguna = $session->get('nim');
        $jumlah_kehadiran_pengguna = count($modelDaftarHadir->where('nim', $nim_pengguna)->findAll());
        $presensi = $jumlah_kehadiran_pengguna / $jumlah_kegiatan_before_now * 100;

        $data = [
            'judul' => 'SiROHIS | Beranda',
            'subjudul' => 'Beranda',
            'active' => 'beranda',
            'role' => $role,
            'jumlah_pengguna' => $jumlah_pengguna,
            'total_kas' => $total_kas,
            'quotes' => $quotes_random['quotes'],
            'warna_quotes' => $warnaQuotes,
            'pengumuman_terbaru' => $pengumuman,
            'presensi' => $presensi,
        ];
        return view('page/beranda', $data);
    }
}
