<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuanganModel extends Model
{
    protected $table = 'keuangan';
    protected $allowedFields = ['id', 'nominal', 'tanggal', 'jenis', 'file', 'keterangan', 'updated_at'];
}
