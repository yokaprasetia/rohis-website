<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\DaftarHadirModel;
use CodeIgniter\I18n\Time;

class Pengumuman extends BaseController
{
    public function index()
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new PengumumanModel();

        $data = [
            'judul' => 'SiROHIS | Pengumuman',
            'subjudul' => 'Pengumuman',
            'active' => 'pengumuman',
            'role'  => $role,
            'pengumuman' => $model->orderBy('updated_at', 'DESC')->findAll(),
        ];
        // dd($data['pengumuman']);
        return view('page/pengumuman', $data);
    }

    public function detail($id)
    {
        $session = session();
        $role = $session->get('role'); // ------------------------ // AUTENTIKASI AKUN

        $model = new PengumumanModel();
        $data = [
            'judul' => 'SiROHIS | Detail Pengumuman',
            'subjudul' => 'Detail Pengumuman',
            'active' => 'pengumuman',
            'role'  => $role,
            'detail' => $model->where('id', $id)->first(),
        ];

        return view('page/detailPengumuman', $data);
    }

    public function tambah()
    {
        $session = session();
        $model = new PengumumanModel();
        $data = $this->request->getVar();
        $data['updated_at'] = Time::now('Asia/Jakarta');

        $proses = $model->save($data);

        // cek apakah insert atau update
        if (isset($data['id'])) {
            $kegiatan = 'Diupdate';
        } else {
            $kegiatan = 'Ditambah';
        }
        if ($proses) {
            $session->setFlashdata('success', "Pengumuman Berhasil $kegiatan!");
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', "Pengumuman Gagal $kegiatan!");
            return redirect()->to('/pengumuman');
        }
    }

    public function delete($id)
    {
        $session = session();
        $modelPengumuman = new PengumumanModel();
        $modelDaftarHadir = new DaftarHadirModel();

        $delete = $modelPengumuman->delete(['id' => $id]);
        $deleteDaftarHadir = $modelDaftarHadir->delete(['id_kegiatan' => $id]);
        if ($delete && $deleteDaftarHadir) {
            $session->setFlashdata('success', 'Pengumuman Berhasil Dihapus!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', 'Pengumuman Gagal Dihapus!');
            return redirect()->to('/pengumuman');
        }
    }
}
