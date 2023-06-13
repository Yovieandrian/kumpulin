<?php

namespace App\Controllers;

use App\Models\JemputModel;

class LandingPage extends BaseController
{
    // protected $helpers = ['custom'];
    public function index()
    {
        $tbl_jemput = new JemputModel();

        $data = $tbl_jemput->getAllByUser();
        $poin = $tbl_jemput->getAllPoinByUser();

        return view('user/landing-page2', compact('data', 'poin'));
    }


    // public function read()
    // {
    //     $data['tbl_jemput'] = $this->tbl_jemput->getAll();
    //     return view('user/landing-page', $data);
    // }

    // Function Create
    /* public function create()
    {
        $tbl_jemput = new JemputModel();
        $data = $tbl_jemput->getAllByUser();
        $poin = $tbl_jemput->getAllPoinByUser();

        return view('user/landing-page2', compact('data', 'poin'));
    } */

    // Function Proses Data 
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

            // session()->setFlashdata('message', 'Berhasil memesan, silahkan cek status anda pada halaman "Aktivitas Anda".');

            // return redirect()->to(base_url('LandingPage/create'));
        }
    }
}
