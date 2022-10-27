<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        session();
        $this->validation = \Config\Services::validation();
        $this->AdminModel = new \App\Models\AdminModel();
    }

    public function index()
    {
        if (session()->get('user')) {
            return redirect()->to('/admin/kelola-pengguna');
        } else {
            $data['title'] = 'Login';
            $data['validation'] = $this->validation;
            return view('auth/auth', $data);
        }
    }

    public function auth_check()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 8 karakter'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->to('/auth')->with('pesan', 'Login Gagal')->withInput();
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->AdminModel->where('email', $email)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    session()->set('user', $user);
                    return redirect()->to('/admin/kelola-pengguna')->with('pesan', 'Login Berhasil');
                } else {
                    return redirect()->to('/auth')->with('pesan', 'Password salah')->withInput();
                }
            } else {
                return redirect()->to('/auth')->with('pesan', 'Email tidak terdaftar')->withInput();
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
