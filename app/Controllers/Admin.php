<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {   $session = session();
        $data = [
            'title' =>'Dashboard Admin',
            'username' => $session->get('user_name')
            ];
        return view('pages/admin/dashboard', $data);
    }
}
