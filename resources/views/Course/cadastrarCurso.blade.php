@extends('templates.master')

@section('nav')
    <nav class="green darken-1" role="navigation">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        </div>
    </nav>    
@endsection


@section('conteudo-view')
    <main class="container">
        <div class="col s12 m12">
            <div class="row">
                <h4 class="center-align">Cadastrar Curso</h4>
                <div class="divider"></div>
        
                <form  class="col s12" method="POST" action="adicionarCurso">
                    {{-- token request --}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    {{-- titulo --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="titulo">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
        
                    <div class="row">              
                        <button class="btn waves-effect waves-light col s12 m2" type="submit" name="action">Cadastrar
                        <i class="material-icons right">create</i>
                        </button>
                    </div>
        
                </form>
                </div>
            </div>
        </div>
    </main>
@endsection