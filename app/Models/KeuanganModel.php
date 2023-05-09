<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuanganModel extends Model
{
    protected $table = 'keuangan';
    protected $allowedFields = ['id', 'nominal', 'tanggal', 'jenis', 'file', 'keterangan', 'updated_at'];

    public function jumlah($angka)
    {
        // Jumlah masuk
        $proses = 0;
        foreach ($angka as $m) :
            $proses = $proses + $m['nominal'];
        endforeach;

        return $proses;
    }

    public function hitung($masuk, $keluar)
    {
        // Jumlah masuk
        $kas_masuk = 0;
        $kas_keluar = 0;
        foreach ($masuk as $m) :
            $kas_masuk = $kas_masuk + $m['nominal'];
        endforeach;

        foreach ($keluar as $k) :
            $kas_keluar = $kas_keluar + $k['nominal'];
        endforeach;

        return $kas_masuk - $kas_keluar;
    }
}
