<?php

namespace App\Controllers;
use App\Models\LoginModel;

$model;
class Login extends BaseController
{   
    public function __construct()
    {
        helper(['form','url']);
        $this->model = new LoginModel();
        
    }
    public function index(): string
    {
        $data['title'] = 'Login LMS SMK Fajar Utama';
        return view('pages/index',$data);
    }

    public function check() 
    {
        $session = session();
        $username = $this->request->getVar('user');
        $password = $this->request->getVar('pass');
        $data = $this->model->where('username', $username)->first();
        if($data)
        {
            $pass = $data['password'];
            // $verifypass = password_verify($pass,$password);
            // if($verifypass)
            if($password == $pass)
            {
                $sess_data = [
                    'user_id' =>$data['id_user'],
                    'user_name' => $data['username'],
                    'level' => $data['level'],
                    'logged_in' => true
                ];
                $session->set($sess_data);
                if($sess_data['level']=='1')
                {  
                    $this->model->set('last_login', date('Y-m-d'))->where('username', $username)
                    ->update();
                    return redirect()->to('admin/index');
                }
                elseif($sess_data['level']=='2')
                {
                    $this->model->set('last_login', date('Y-m-d'))->where('username', $username)
                    ->update();
                    return redirect()->to('guru/index');
                }
            }
            else
            {
                $session->setFlashdata('pass','Wrong Password');
                return redirect()->to('/');
            }
        }
        else
        {
            $session->setFlashdata('user','Wrong Username');
                return redirect()->to('/');
        }
    }
}
