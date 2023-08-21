<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Auth_Model = new AuthModel();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!'
                ]
            ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!'
                ]
            ],
            'no_hp' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!',
                    'matches' => '{field} Tidak sama!'
                ]
            ],

        ])) {
            //jika valid
           $data = array (
            'nama_user' => $this->request->getPost('nama_user'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'password' => $this->request->getPost('password'),
            'level' => 3,
           );

           $this->Auth_Model->save_register($data);
           session()->setFlashdata('pesan','Register Berhasil !');
           return redirect()->to(base_url('auth/register'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register'));
        }
    }
}
