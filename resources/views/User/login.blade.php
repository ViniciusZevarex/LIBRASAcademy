@extends('templates.master')

@section('conteudo-view')
<main class="container">

    {{-- form --}}
    <div class="row">
      <div class="col s12 m5 offset-m3">
        <div class="card-panel grey lighten-5 z-depth-5 panel-form">
  
          <div class="row">
          <h4 class="center-align"><img src="{{asset('imgs/img_website_style/black-logo.png')}}" class="form-logo"></h4>
            <h4 class="center-align">Entrar</h4>
            <div class="divider"></div>
            
            <form  class="col s12" method="POST" action="login/auth">
              {{-- email --}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
              </div>
  
              {{-- senha --}}
              <div class="row">
                <div class="input-field col s12">
                    <input id="senha" type="password" class="validate" name="senha">
                    <label for="senha">Senha</label>
                </div>
  
              <div class="row">              
                  <button class="btn waves-effect waves-light col s12 m12" type="submit" name="action">enviar
                    <i class="material-icons right">send</i>
                  </button>
              </div>
  
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection