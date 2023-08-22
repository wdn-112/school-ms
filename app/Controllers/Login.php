<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Login LMS SMK Fajar Utama';
        return view('pages/index',$data);
    }
}
