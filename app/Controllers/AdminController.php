<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;

class AdminController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    // Untuk link menuju ke halaman login
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    // Halaman login petugas
    public function login()
    {
        return view('auth/login_adm');
    }

    // Halaman register petugas
    public function register()
    {
        return view('auth/register_adm');
    }

    // Proses register petugas
    public function save()
    {
        $validation = $this->validate([
            'username_adm' => [
                'rules' => 'required|min_length[4]|max_length[50]|is_unique[admin.username_adm]',
                'errors' => [
                    'required' => 'Nama Petugas harus diisi',
                    'min_length' => 'Nama Petugas minimal 4 Karakter',
                    'max_length' => 'Nama Petugas maksimal 50 Karakter',
                    'is_unique' => 'Nama Petugas sudah digunakan sebelumnya'
                ]
            ],
            'email_adm' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'min_length' => 'Email minimal 4 Karakter',
                    'max_length' => 'Email maksimal 100 Karakter',
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
            return view('auth/register_adm', ['validation' => $this->validator]);
        } else {
            // Lets register use into db
            $username_adm = $this->request->getPost('username_adm');
            $email_adm = $this->request->getPost('email_adm');
            $password = $this->request->getPost('password');

            $values = [
                'username_adm' => $username_adm,
                'email_adm' => $email_adm,
                'password' => Hash::make($password),
            ];

            $adminModel = new \App\Models\AdminModel();
            $query = $adminModel->insert($values);
            if (!$query) {
                return  redirect()->back('AdminController/register')->with('fail', 'Terjadi kesalahan.');
            } else {
                return  redirect()->to('AdminController/login')->with('success', 'Berhasil Mendaftarkan Akun, Silahkan Login');
            }
        }
    }

    // Proses validasi akun dari register untuk masuk ke login
    public function check()
    {
        $validation = $this->validate([
            'username_adm' => [
                'rules'  => 'required|is_not_unique[admin.username_adm]',
                'errors' => [
                    'required' => 'Nama Petugas harus diisi',
                    'is_not_unique' => 'Nama Petugas tidak ditemukan',
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
            return view('auth/login_adm', ['validation' => $this->validator]);
        } else {
            $username_adm = $this->request->getPost('username_adm');
            $password = $this->request->getPost('password');
            $adminModel = new \App\Models\AdminModel();
            $user_info = $adminModel->where('username_adm', $username_adm)->first();

            $check_password = Hash::check($password, $user_info['password']);
            if (!$check_password) {
                session()->setFlashdata('fail', 'Terjadi Kesalahan.');
                return  redirect()->to('/auth/login_adm')->withInput();
            } else {
                $session_data = ['admin' => $user_info];
                session()->set('LoggedUser', $session_data);
                return  redirect()->to('Dashboard/index');
            }
        }
    }

    // Logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('AdminController/login')->with('fail', 'Anda Telah Keluar');
    }
}
