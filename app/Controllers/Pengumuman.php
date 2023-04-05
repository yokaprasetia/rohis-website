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
        $data['upload_at'] = Time::now('Asia/Jakarta');

        $proses = $model->save($data);
        if ($proses) {
            $session->setFlashdata('success', 'Pengumuman Berhasil Ditambah!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', 'Pengumuman Gagal Ditambah!');
            return redirect()->to('/pengumuman');
        }
    }

    public function update($id)
    {
        $model = new PengumumanModel();
        $data = [
            'judul' => 'SiROHIS | Update Pengumuman',
            'subjudul' => 'Update Pengumuman',
            'active' => 'pengumuman',
            'info' => $model->where('id', $id)->first(),
        ];

        return view('page/updatePengumuman', $data);
    }

    public function prosesUpdate()
    {
        $session = session();
        $model = new PengumumanModel();
        $info = $this->request->getVar();
        $info['upload_at'] = Time::now('Asia/Jakarta');

        $proses = $model->save($info);
        if ($proses) {
            $session->setFlashdata('success', 'Pengumuman Berhasil Diupdate!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', 'Pengumuman Gagal Diupdate!');
            return redirect()->to('/pengumuman');
        }
    }

    public function delete($id)
    {
        $session = session();
        $model = new PengumumanModel();

        $delete = $model->delete(['id' => $id]);
        if ($delete) {
            $session->setFlashdata('success', 'Pengumuman Berhasil Dihapus!');
            return redirect()->to('/pengumuman');
        } else {
            $session->setFlashdata('danger', 'Pengumuman Gagal Dihapus!');
            return redirect()->to('/pengumuman');
        }
    }
}
