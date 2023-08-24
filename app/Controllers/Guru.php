<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function index()
    {
        $data['title']='Page Guru';
        return view('pages/guru/index', $data);
    }
}
