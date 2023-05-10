<?php

namespace App\Models;

use CodeIgniter\Model;

class LogAktivitasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'logaktivitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_user', 'nim', 'jabatan', 'waktu', 'jenis_aktivitas', 'id_aktivitas', 'aksi'];
}
