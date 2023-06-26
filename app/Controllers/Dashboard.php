<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\JemputModel;
use App\Models\UserModel;
use App\Models\AdminDataModel;
use App\Libraries\Hash;


class Dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard/index');
    }

    // public function pengguna()
    // {
    //     $users = new UserModel();
    //     $data = $users->getUsers();
    //     return view('admin/data/pengguna', compact('data'));
    // }

    public function pengguna()
    {
        $users = new UserModel();
        $data = [
            'data' => $users->getUsers()
        ];
        return view('admin/data/pengguna', $data);
    }

    public function penjemputan()
    {
        $jemput = new JemputModel();
        $data = $jemput->getAll();

        return view('admin/data/penjemputan', compact('data'));
    }

    public function sampah()
    {
        $jemput = new JemputModel();
        $data = $jemput->getAll();

        return view('admin/data/sampah', compact('data'));
    }

    public function poin()
    {
        $jemput = new JemputModel();
        $data = $jemput->getAll();

        return view('admin/data/poin', compact('data'));
    }

    /* public function formulir($id)
    {
        $jemput = new JemputModel();
        $data = $jemput->getById($id);

        return view('admin/data/penjemputan', compact('data'));
    } */

    public function dataPengguna()
    {
        $users = new UserModel();
        $data = [
            'data' => $users->getUsers()
        ];
        return view('admin/data/form-pengguna', $data);
    }

    // public function process()
    // {
    //     helper(['form', 'url']);

    //     $validation = $this->validate([
    //         'username' => [
    //             'rules' => 'required|min_length[4]|max_length[50]|is_unique[user.username]',
    //             'errors' => [
    //                 'required' => 'Nama Pengguna harus diisi',
    //                 'min_length' => 'Nama Pengguna minimal 4 Karakter',
    //                 'max_length' => 'Nama Pengguna maksimal 50 Karakter',
    //                 'is_unique' => 'Nama Pengguna sudah digunakan sebelumnya'
    //             ]
    //         ],
    //         'alamat' => [
    //             'rules' => 'required|min_length[4]|max_length[100]',
    //             'errors' => [
    //                 'required' => 'Alamat harus diisi',
    //                 'min_length' => 'Alamat minimal 4 Karakter',
    //                 'max_length' => 'Alamat maksimal 150 Karakter',
    //             ]
    //         ],
    //         'tgl_jemput' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan tanggal pengambilan yang anda inginkan.'
    //             ]
    //         ],
    //         'sesi'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan sesi pengambilan yang anda inginkan.'
    //             ]
    //         ],
    //         'botol'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Ketik 0 jika tidak ada.'
    //             ]
    //         ],
    //         'karton'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Ketik 0 jika tidak ada.'
    //             ]
    //         ],
    //         'kaleng'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Ketik 0 jika tidak ada.'
    //             ]
    //         ],
    //         'jerigen'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Ketik 0 jika tidak ada.'
    //             ]
    //         ],
    //         'poin'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan poin.'
    //             ]
    //         ],
    //         'status'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan status pengambilan.'
    //             ]
    //         ],
    //     ]);

    //     if (!$validation) {
    //         return $this->penjemputan();
    //     } else {

    //         $userModel = new \App\Models\UserModel();
    //         $query = $userModel->insert([
    //             'username' => $this->request->getPost('username'),
    //             'alamat' => $this->request->getPost('alamat'),
    //         ]);

    //         $jemputModel = new \App\Models\JemputModel();
    //         $query = $jemputModel->insert([
    //             'tgl_jemput'   => $this->request->getPost('tgl_jemput'),
    //             'sesi' => $this->request->getPost('sesi'),

    //             'botol' => $this->request->getPost('botol'),
    //             'karton' => $this->request->getPost('karton'),
    //             'kaleng' => $this->request->getPost('kaleng'),
    //             'jerigen' => $this->request->getPost('jerigen'),

    //             'poin' => $this->request->getPost('poin'),
    //             'status' => $this->request->getPost('status'),
    //         ]);

    //         // $admindataModel = new \App\Models\AdminDataModel();
    //         // $query = $admindataModel->insert([
    //         // 'jenis' => $this->request->getPost('jenis'),
    //         // 'berat' => $this->request->getPost('berat'),
    //         // 'botol' => $this->request->getPost('botol'),
    //         // 'karton' => $this->request->getPost('karton'),
    //         // 'kaleng' => $this->request->getPost('kaleng'),
    //         // 'jerigen' => $this->request->getPost('jerigen'),

    //         // 'poin' => $this->request->getPost('poin'),
    //         // 'status' => $this->request->getPost('status'),
    //         // 'id_user' => session()->get('LoggedUser')['user']['id_user']
    //         // ]);


    //         if (!$query) {
    //             return  redirect()->back('Dashboard/formulir')->with('fail', 'Terjadi kesalahan.');
    //         } else {
    //             return  redirect()->to('Dashboard/formulir')->with('success', 'Berhasil memesan, silahkan cek status anda pada halaman "Aktivitas Anda".');
    //         }

    //         // session()->setFlashdata('message', 'Berhasil memesan, silahkan cek status anda pada halaman "Aktivitas Anda".');

    //         // return redirect()->to(base_url('LandingPage/create'));
    //     }
    // }

    public function save()
    {
        helper(['form', 'url']);

        // Let's validate request
        $validation = $this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[50]|is_unique[user.username]',
                'errors' => [
                    'required' => 'Nama Pengguna harus diisi',
                    'min_length' => 'Nama Pengguna minimal 4 Karakter',
                    'max_length' => 'Nama Pengguna maksimal 50 Karakter',
                    'is_unique' => 'Nama Pengguna sudah digunakan sebelumnya'
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'min_length' => 'Email minimal 4 Karakter',
                    'max_length' => 'Email maksimal 100 Karakter',
                ]
            ],
            'no_telp' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'No. Telp harus diisi',
                    'min_length' => 'No. Telp minimal 4 Karakter',
                    'max_length' => 'No. Telp maksimal 100 Karakter',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                    'min_length' => 'Alamat minimal 4 Karakter',
                    'max_length' => 'Alamat maksimal 150 Karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[25]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 4 Karakter',
                    'max_length' => 'Password maksimal 25 Karakter',
                ]
            ],
            'pass_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Ulangi Password harus diisi',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ]);

        if (!$validation) {
            return view('admin/data/pengguna', ['validation' => $this->validator]);
        } else {
            // Lets register use into db
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $no_telp = $this->request->getPost('no_telp');
            $alamat = $this->request->getPost('alamat');
            $password = $this->request->getPost('password');

            $values = [
                'username' => $username,
                'email' => $email,
                'no_telp' => $no_telp,
                'alamat' => $alamat,
                'password' => Hash::make($password),
            ];

            $userModel = new \App\Models\UserModel();
            $query = $userModel->insert($values);
            if (!$query) {
                return  redirect()->back('/Dashboard/pengguna')->with('fail', 'Terjadi kesalahan.');
            } else {
                return  redirect()->to('/Dashboard/pengguna')->with('success', 'Berhasil mendaftarkan akun, silahkan login');
            }
        }
    }

    public function check()
    {
        $validation = $this->validate([
            'username' => [
                'rules'  => 'required|is_not_unique[user.username]',
                'errors' => [
                    'required' => 'Nama Pengguna harus diisi',
                    'is_not_unique' => 'Nama Pengguna tidak ditemukan',
                ],
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'min_length' => 'Email minimal 4 Karakter',
                    'max_length' => 'Email maksimal 100 Karakter',
                ]
            ],
            'no_telp' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'No. Telp harus diisi',
                    'min_length' => 'No. Telp minimal 4 Karakter',
                    'max_length' => 'No. Telp maksimal 100 Karakter',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                    'min_length' => 'Alamat minimal 4 Karakter',
                    'max_length' => 'Alamat maksimal 150 Karakter',
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[4]|max_length[25]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 4 Karakter',
                    'max_length' => 'Password maksimal 25 Karakter',
                ],
            ],
            'pass_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Ulangi Password harus diisi',
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ]);

        if (!$validation) {
            return view('admin/data/pengguna', ['validation' => $this->validator]);
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $userModel = new \App\Models\UserModel();
            $user_info = $userModel->where('username', $username)->first();

            $check_password = Hash::check($password, $user_info['password']);
            if (!$check_password) {
                session()->setFlashdata('fail', 'Terjadi Kesalahan.');
                return  redirect()->to('/admin/data/form-pengguna')->withInput();
            } else {
                // session()->setFlashdata('success', 'Berhasil Masuk');
                $session_data = ['user' => $user_info];
                session()->set('LoggedUser', $session_data);
                return  redirect()->to('/admin/data/pengguna');
            }
        }
    }

    public function update()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            /* 'username' => [
                'rules' => 'required|min_length[4]|max_length[50]|is_unique[user.username]',
                'errors' => [
                    'required' => 'Nama Pengguna harus diisi',
                    'min_length' => 'Nama Pengguna minimal 4 Karakter',
                    'max_length' => 'Nama Pengguna maksimal 50 Karakter',
                    'is_unique' => 'Nama Pengguna sudah digunakan sebelumnya'
                ]
            ], */
            'alamat' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                    'min_length' => 'Alamat minimal 4 Karakter',
                    'max_length' => 'Alamat maksimal 150 Karakter',
                ]
            ],
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
            'botol'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Ketik 0 jika tidak ada.'
                ]
            ],
            'karton'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Ketik 0 jika tidak ada.'
                ]
            ],
            'kaleng'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Ketik 0 jika tidak ada.'
                ]
            ],
            'jerigen'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Ketik 0 jika tidak ada.'
                ]
            ],
            'poin'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan poin.'
                ]
            ],
            'status'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan status pengambilan.'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->with('fail', 'Data tidak valid.');
        } else {

            $userModel = new \App\Models\UserModel();
            $query = $userModel
                ->set([
                    'username' => $this->request->getPost('username'),
                    'alamat' => $this->request->getPost('alamat'),
                ])
                ->where('id_user', $this->request->getPost('id_user'))
                ->update();

            $jemputModel = new \App\Models\JemputModel();
            $query = $jemputModel
                ->set([
                    'tgl_jemput'   => $this->request->getPost('tgl_jemput'),
                    'sesi' => $this->request->getPost('sesi'),

                    'botol' => $this->request->getPost('botol'),
                    'karton' => $this->request->getPost('karton'),
                    'kaleng' => $this->request->getPost('kaleng'),
                    'jerigen' => $this->request->getPost('jerigen'),

                    'poin' => $this->request->getPost('poin'),
                    'status' => $this->request->getPost('status'),
                ])
                ->where('id_jemput', $this->request->getPost('id_jemput'))
                ->update();
        }

        if (!$query) {
            return  redirect()->back()->with('fail', 'Terjadi kesalahan.');
        } else {
            return  redirect()->to('Dashboard/penjemputan')->with('success', 'Berhasil memesan, silahkan cek status anda pada halaman "Aktivitas Anda".');
        }
    }
}
