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

            // FILTER KEGIATAN WAJIB USER
            $listTingkat = explode(', ', $kegiatan['peserta']);
            $listJk = explode(', ', $kegiatan['jenis_kelamin']);
            $wajib = false;
            for ($i = 0; $i < count($listTingkat); $i++) {
                if ($listTingkat[$i] == session()->get('tingkat')) {
                    for ($j = 0; $j < count($listJk); $j++) {
                        if ($listJk[$j] == session()->get('jenis_kelamin')) {
                            $wajib = true;
                        }
                    }
                }
            }

            // FILTER KEGIATAN WAJIB YANG SUDAH TERJADI - isBefore()
            if ($wajib == true) {
                $time = Time::parse($kegiatan['tanggal']);
                $proses = $time->isBefore($waktu_sekarang);
                if ($proses) {
                    $daftar_kegiatan[] = $kegiatan;
                }
            }
        endforeach;

        // JUMLAH KEHADIRAN USER
        $nim_pengguna = $session->get('nim');
        $kehadiran = [];
        foreach ($daftar_kegiatan as $kegiatan) :
            $id_kegiatan = $kegiatan['id'];
            $proses = $modelDaftarHadir->where('id_kegiatan', $id_kegiatan)->findAll();

            if ($proses) {
                $ada = false;
                foreach ($proses as $p) :
                    if ($p['nim'] == $nim_pengguna) {
                        $ada = true;
                    }
                endforeach;
                if ($ada) {
                    $kehadiran[] = 'Hadir';
                }
            }
        endforeach;

        $jumlah_kehadiran = count($kehadiran);
        $jumlah_kegiatan_wajib_before_now = count($daftar_kegiatan);
        if (!($jumlah_kegiatan_wajib_before_now == 0) && !($jumlah_kehadiran == 0)) {
            $presensi = $jumlah_kehadiran / $jumlah_kegiatan_wajib_before_now * 100;
        } else {
            $presensi = 0;
        }

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
