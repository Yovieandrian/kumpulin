<?php

namespace App\Controllers;

use App\Models\JemputModel;

class LandingPage extends BaseController
{
    // Halaman Landing Page ketika User Telah login
    public function index()
    {
        $tbl_jemput = new JemputModel();

        $data = $tbl_jemput->getAllByUser();
        $poin = $tbl_jemput->getAllPoinByUser();
        $poinfilter = $tbl_jemput->getAllPoinByAllUserFilter();

        return view('user/landing-page2', compact('data', 'poin', 'poinfilter'));
    }

    // Proses Input Data Penjemputan 
    public function process()
    {

        helper(['form', 'url']);

        $validation = $this->validate([
            'tgl_jemput' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan tanggal pengambilan yang anda inginkan.'
                ]
            ],
            'sesi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan sesi pengambilan yang anda inginkan.'
                ]
            ],
        ]);

        if (!$validation) {
            return view('user/landing-page2', ['validation' => $this->validator]);
        } else {
            $jemputModel = new \App\Models\JemputModel();
            $query = $jemputModel->insert([
                'tgl_jemput'   => $this->request->getPost('tgl_jemput'),
                'sesi' => $this->request->getPost('sesi'),
                'id_user' => session()->get('LoggedUser')['user']['id_user']
            ]);

            if (!$query) {
                return  redirect()->back('LandingPage/index#team')->with('fail', 'Terjadi kesalahan.');
            } else {
                return  redirect()->to('LandingPage/index#team')->with('success', 'Berhasil memesan, silahkan cek status anda pada halaman "Aktivitas Anda".');
            }
        }
    }
}
