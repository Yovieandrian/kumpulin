<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    // Halaman login pengguna
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    // Halaman login pengguna
    public function login()
    {
        return view('auth/login');
    }

    // Halaman register pengguna
    public function register()
    {
        return view('auth/register');
    }

    // Proses register pengguna
    public function save()
    {
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
            return view('auth/register', ['validation' => $this->validator]);
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
                return  redirect()->back('auth/register')->with('fail', 'Terjadi kesalahan.');
            } else {
                return  redirect()->to('auth/login')->with('success', 'Berhasil mendaftarkan akun, silahkan login');
            }
        }
    }

    // Proses validasi akun dari register untuk masuk ke login
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
            'password' => [
                'rules'  => 'required|min_length[4]|max_length[25]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 4 Karakter',
                    'max_length' => 'Password maksimal 25 Karakter',
                ],
            ],
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $userModel = new \App\Models\UserModel();
            $user_info = $userModel->where('username', $username)->first();

            $check_password = Hash::check($password, $user_info['password']);
            if (!$check_password) {
                session()->setFlashdata('fail', 'Terjadi Kesalahan.');
                return  redirect()->to('/auth/login')->withInput();
            } else {
                // session()->setFlashdata('success', 'Berhasil Masuk');
                $session_data = ['user' => $user_info];
                session()->set('LoggedUser', $session_data);
                return  redirect()->to('LandingPage/index');
            }
        }
    }

    // Logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Auth/login')->with('success', 'You are logged out!');
    }
}
