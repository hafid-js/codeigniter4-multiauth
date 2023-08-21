<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data = array (
            'title' => 'Halaman User',
            'isi' => 'v_halaman'
        );
        return view('layout/v_wrapper', $data);
    }
}
