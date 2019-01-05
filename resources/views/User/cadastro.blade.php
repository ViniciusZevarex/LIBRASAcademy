@extends('templates.master')

@section('class-body')
body-register  
@endsection
@section('conteudo-view')
<main class="container">

  {{-- form --}}
  <div class="row">
    <div class="col s12 m5 offset-m3">
      <div class="card-panel grey lighten-5 z-depth-5 panel-form">

        <div class="row">
        <h4 class="center-align"><img src="{{asset('imgs/img_website_style/black-logo.png')}}" class="form-logo"></h4>
          <h4 class="center-align">Cadastre-se</h4>
          <div class="divider"></div>

          <form  class="col s12" method="POST" action="">

            {{-- nome --}}
            <div class="row">
              <div class="input-field col s6">
                  <input id="nome" type="text" class="validate" name="nome">
                  <label for="nome">Nome</label>
              </div>

              {{-- sobrenome --}}
              <div class="input-field col s6">
                  <input id="sobrenome" type="text" class="validate" name="sobrenome">
                  <label for="sobrenome">Sobrenome</label>
              </div>
            </div>

            {{-- email --}}
            <div class="row">
              <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email">
                  <label for="email">Email</label>
              </div>
            </div>

            {{-- senha --}}
            <div class="row">
              <div class="input-field col s6">
                  <input id="senha" type="password" class="validate" name="senha">
                  <label for="senha">Senha</label>
              </div>

            {{-- confirmar senha --}}
            <div class="row">
                <div class="input-field col s6">
                  <input id="confirmarsenha" type="password" class="validate" name="confirmarSenha">
                  <label for="confirmarsenha">Confirmar Senha</label>
                </div>
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