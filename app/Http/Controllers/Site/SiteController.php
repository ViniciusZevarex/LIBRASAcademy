<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register(){
        return view('User/cadastro');
    }

    public function fazerLogin(){
        return view('User/login');
    }
}
