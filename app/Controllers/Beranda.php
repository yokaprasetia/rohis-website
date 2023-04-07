<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KeuanganModel;
use App\Models\PengumumanModel;
use App\Models\QuotesModel;

class Beranda extends BaseController
{
    public function index()
    {
        $modelUsers = new UserModel();
        $modelKeuangan = new KeuanganModel();
        $modelPengumuman = new PengumumanModel();
        $modelQuotes = new QuotesModel();

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

        $data = [
            'judul' => 'SiROHIS | Beranda',
            'subjudul' => 'Beranda',
            'active' => 'beranda',
            'jumlah_pengguna' => $jumlah_pengguna,
            'total_kas' => $total_kas,
            'quotes' => $quotes_random['quotes'],
            'warna_quotes' => $warnaQuotes,
        ];
        return view('page/beranda', $data);
    }
}
