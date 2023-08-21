<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{
    public function index()
    {
        $data = array (
            'title' => 'Halaman Front End',
        );
        return view('v_web', $data);
    }
}
