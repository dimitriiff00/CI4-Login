<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends BaseController  {

    public function login(){
        return view('login/tela-login');
    }
}
