<?php

namespace App\Http\Controllers;
require 'C:\xampp\htdocs\test-laravel\vendor\autoload.php';
use SSO\SSO;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function loginredirect()
    {
        SSO::authenticate();
        if (true){
            return view('action.home');
        }
    }
    public function logout()
    {
        SSO::logout();
        return view('login');
    }
    
    
}