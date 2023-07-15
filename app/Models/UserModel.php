<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'nama', 'email', 'no_hp', 'domisili', 'nim', 'kelas', 'angkatan', 'tingkat', 'tanggal_lahir', 'password', 'role', 'alamat_kost', 'jenis_kelamin', 'status'];
}
