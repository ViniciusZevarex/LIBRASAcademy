<?php

namespace App\Http\Controllers\Curso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curso;

class CursoController extends Controller
{
    //redireciona para o dashboard do curso
    public function index()
    {
        return view('Course/dashboard');
    }

    /*
     * Exibe a página com o formulário para cadastrar um curso
     * =========================================================== 
     */
    public function courseRegisterPage()
    {
        return view('Course/cadastrarCurso');
    }

    /*
     * Envia os dados enviados pelo instrutor para o banco de dados
     * e efetua o cadastro do curso
     * =========================================================== 
     */
    public function cadastrarCurso(Request $request){
        $curso          = new Curso();
        $curso->Titulo  =  $request->input('titulo');
        
        $curso->save();

        return  redirect('course/dashboard');
    }

    /*
     * Exibe a página com o formulário para cadastrar uma unidade
     * =========================================================== 
     */

    public function unitCourseRegisterPage(){
        $cursos = Curso::all();
        return view('Course/cadastrarUnidades')->with('cursos',$cursos);
    }

}
