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
        $dataPengguna = new UserModel();
        $dataPenjemputan = new JemputModel();

        $query = $dataPenjemputan->selectSum('botol')->get();
        $result = $query->getRow();
        $jumlahBotol = $result->botol;

        // jumlah karton
        $query = $dataPenjemputan->selectSum('karton')->get();
        $result = $query->getRow();
        $jumlahKarton = $result->karton;

        // jumlah kaleng
        $query = $dataPenjemputan->selectSum('kaleng')->get();
        $result = $query->getRow();
        $jumlahKaleng = $result->kaleng;

        // jumlah jerigen
        $query = $dataPenjemputan->selectSum('jerigen')->get();
        $result = $query->getRow();
        $jumlahJerigen = $result->jerigen;

        $data = [
            'title' => 'Dashboard Admin',
            'jumlahPengguna' => $dataPengguna->countAll(),
            'jumlahPenjemputan' => $dataPenjemputan->countAll(),
            'jumlahBotol' => $jumlahBotol,
            'jumlahKarton' => $jumlahKarton,
            'jumlahKaleng' => $jumlahKaleng,
            'jumlahJerigen' => $jumlahJerigen
        ];

        return view('admin/dashboard/index', $data);
    }

    // public function pengguna()
    // {
    //     $users = new UserModel();
    //     $data = $users->getUsers();
    //     return view('admin/data/pengguna', compact('data'));
    // }

    public function pengguna()
    {
        // $users = new UserModel();
        // $data = [
        //     'data' => $users->getUsers()
        // ];
        $users = new UserModel();
        $data = [
            'data' => $users->getUsers(),
            'title' => 'Data Pengguna'
        ];
        return view('admin/data/pengguna', $data);
    }
    public function dataPengguna()
    {
        $users = new UserModel();
        $data = [
            'data' => $users->getUsers()
        ];
        return view('admin/data/form-pengguna', $data);
    }

    public function penjemputan()
    {
        // $jemput = new JemputModel();
        // $data = $jemput->getAll();
        $jemput = new JemputModel();
        $dataa = $jemput->getAll();

        $data = [
            'data' => $dataa,
            'title' => 'Data Penjemputan'
        ];

        return view('admin/data/penjemputan', $data);
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
        $tbl_jemput = new JemputModel();

        $data = $jemput->getAll();
        $poin = $tbl_jemput->getAllPoinByAllUser();
        $title = 'Data Poin';

        // $data = [
        //     'data' => $jemput->getAll(),
        //     'poin' => $jemput->getAllPoinByAllUser(),
        //     'title' => 'Data Poin'
        // ];
        // return view('admin/data/poin', compact('data'));
        return view('admin/data/poin', compact('data', 'poin'));
    }

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
            return view('admin/data/form-pengguna', ['validation' => $this->validator]);
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


    public function updatePengguna()
    {
        helper(['form', 'url']);

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
        ]);

        if (!$validation) {
            return redirect()->back()->with('fail', 'Data tidak valid.');
        } else {

            $userModel = new \App\Models\UserModel();
            $query = $userModel
                ->set([
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'no_telp' => $this->request->getPost('no_telp'),
                    'alamat' => $this->request->getPost('alamat'),
                ])
                ->where('id_user', $this->request->getPost('id_user'))
                ->update();

            // $jemputModel = new \App\Models\JemputModel();
            // $query = $jemputModel
            //     ->set([
            //         'tgl_jemput'   => $this->request->getPost('tgl_jemput'),
            //         'sesi' => $this->request->getPost('sesi'),

            //         'botol' => $this->request->getPost('botol'),
            //         'karton' => $this->request->getPost('karton'),
            //         'kaleng' => $this->request->getPost('kaleng'),
            //         'jerigen' => $this->request->getPost('jerigen'),

            //         'poin' => $this->request->getPost('poin'),
            //         'status' => $this->request->getPost('status'),
            //     ])
            //     ->where('id_jemput', $this->request->getPost('id_jemput'))
            //     ->update();
        }

        if (!$query) {
            return  redirect()->back()->with('fail', 'Terjadi kesalahan.');
        } else {
            return  redirect()->to('Dashboard/pengguna')->with('success', 'Berhasil diupdate');
        }
    }


    public function delete($id_user)
    {
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($id_user);

        if ($user) {
            $userModel->delete($id_user);

            //flash message
            session()->setFlashdata('message', 'Data Berhasil Dihapus');

            return redirect()->to(base_url('/Dashboard/Pengguna'));
        }
        // $userModel = new \App\Models\UserModel();

        // $success = $this->$userModel->hapus($id);
        // if ($success) {
        //     session()->setFlashdata('message', 'Ditambahkan');
        //     return redirect()->to('Dashboard/Pengguna');
        // }

        // $jemput = new JemputModel(); // Ganti YourModel dengan model yang sesuai

        // $delete = $jemput->delete($id);
        // if ($delete) {
        //     // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        //     return redirect()->to('/admin/data/penjemputan')->with('status', 'Data berhasil dihapus.');
        // } else {
        //     // Redirect ke halaman yang sesuai atau tampilkan pesan gagal
        //     return redirect()->to('/admin/data/penjemputan')->with('status', 'Gagal menghapus data.');
        // }


        // $jemputModel = new \App\Models\JemputModel(); // Ganti YourModel dengan model yang sesuai
        // $jemputModel->delete($id);

        // return $this->response->setJSON(['status' => 'success']);
        // return redirect()->to('/admin/data/penjemputan');
        // if ($delete) {
        //     // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        //     return redirect()->to('/admin')->with('status', 'Data berhasil dihapus.');
        // } else {
        //     // Redirect ke halaman yang sesuai atau tampilkan pesan gagal
        //     return redirect()->to('/admin')->with('status', 'Gagal menghapus data.');
        // }
    }
}
