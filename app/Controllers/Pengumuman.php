<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use CodeIgniter\I18n\Time;

class Pengumuman extends BaseController
{
    public function index()
    {
        $model = new PengumumanModel();

        $data = [
            'judul' => 'SiROHIS | Pengumuman',
            'subjudul' => 'Pengumuman',
            'active' => 'pengumuman',
            'pengumuman' => $model->orderBy('upload_at', 'DESC')->findAll(),
        ];
        // dd($data['pengumuman']);
        return view('page/pengumuman', $data);
    }

    public function detail($id)
    {
        $model = new PengumumanModel();
        $data = [
            'judul' => 'SiROHIS | Detail Pengumuman',
            'subjudul' => 'Detail Pengumuman',
            'active' => 'pengumuman',
            'detail' => $model->where('id', $id)->first(),
        ];

        return view('page/detailPengumuman', $data);
    }

    public function tambah()
    {
        $session = session();
        $model = new PengumumanModel();
        $data = $this->request->getVar();
        // upload_at
        $data['upload_at'] = Time::now();

        $proses = $model->save($data);
        if ($proses) {
            $session->setFlashdata('success', 'Berhasil Menambah Pengumuman!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', 'Gagal Menambah Pengumumnan!');
            return redirect()->to('/pengumuman');
        }
    }
}
