<?php

namespace App\Controllers;

use App\Models\KeuanganModel;
use CodeIgniter\Files\File;
use CodeIgniter\I18n\Time;

class Keuangan extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $model = new KeuanganModel();

        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Keuangan',
            'active' => 'keuangan',
            'keuangan' => $model->orderBy('updated_at', 'DESC')->findAll(),
            'errors' => [],
        ];

        return view('page/keuangan', $data);
    }

    public function tambah()
    {
        $session = session();
        $model = new KeuanganModel();
        $data = [
            'judul' => 'SiROHIS | Keuangan',
            'subjudul' => 'Keuangan',
            'active' => 'keuangan',
            'keuangan' => $model->orderBy('updated_at', 'DESC')->findAll(),
        ];

        $validationRule = [
            'file' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,5000]', // 1000 = 1 MB
                ],
            ],
        ];

        // Cek validasi
        if (!$this->validate($validationRule)) {
            $data['errors'] = $this->validator->getErrors();

            return view('page/keuangan', $data);
        }

        // tentukan insert atau update (jika update maka unlink)
        $cek = $this->request->getVar();
        if (isset($cek['id'])) {
            $kegiatan = 'Diupdate';

            //menghapus file yang sudah diupload
            $file_uploaded = $model->where('id', $cek['id'])->first();
            $path = './bukti-transaksi/' . $file_uploaded['file'];
            unlink($path);
        } else {
            $kegiatan = 'Ditambahkan';
        }

        // proses upload file ke folder public/bukti-transaksi
        $fileTransaksi = $this->request->getFile('file');
        $namaTransaksi = 'bukti-' . $fileTransaksi->getRandomName();
        $pindah = $fileTransaksi->move('bukti-transaksi', $namaTransaksi);

        if ($pindah) {
            $data = $this->request->getVar();
            $data['file'] = $fileTransaksi->getName();
            $data['updated_at'] = Time::now('Asia/Jakarta');

            // simpan ke data base seluruh isi form
            $proses = $model->save($data);

            if ($proses) {
                $session->setFlashdata('success', "Transaksi Berhasil $kegiatan!");
                return redirect()->to('/keuangan');
            } else {
                $session->setFlashdata('danger', "Transaksi Gagal $kegiatan!");
                return redirect()->to('/keuangan');
            }
        }
    }

    public function delete($id)
    {
        $session = session();
        $model = new KeuanganModel();

        //menghapus file yang sudah diupload
        $file_uploaded = $model->where('id', $id)->first();
        $path = './bukti-transaksi/' . $file_uploaded['file'];
        unlink($path);

        $delete = $model->delete(['id' => $id]);
        if ($delete) {
            $session->setFlashdata('success', 'Transaksi Berhasil Dihapus!');
            return redirect()->to('/keuangan');
        } else {
            $session->setFlashdata('danger', 'Transaksi Gagal Dihapus!');
            return redirect()->to('/keuangan');
        }
    }
}
