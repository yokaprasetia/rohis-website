<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'pengumuman';
    protected $allowedFields = ['id', 'nama', 'isi', 'tempat', 'tanggal', 'waktu_mulai', 'waktu_selesai', 'peserta', 'link', 'updated_at'];
}
