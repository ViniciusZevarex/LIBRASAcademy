<?php

namespace App\Http\Controllers\Curso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    public function index()
    {
        return view('Course/dashboard');
    }
}
