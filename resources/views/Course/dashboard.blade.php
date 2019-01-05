@extends('templates.master')
<div class="sidebar z-depth-5">
    <div class="sidebar-brand-logo">
        <h4 class="text-center white-text text-brand-sidebar"><strong>LA</strong></h4>
    </div>
    <ul class="">
        <li><a class="link-nav tooltipped" href="#" data-position="right" data-tooltip="Conteúdo"><i class="material-icons Small">language</i></a></li>
        <li><a class="link-nav tooltipped" href="#" data-position="right" data-tooltip="Fórum"><i class="material-icons Small">chat</i></a></li>
    </ul>
</div>

@section('conteudo-view')
    <main class="content">
        <h4 class="center-align">Unidades de LIBRAS</h4>
        <div class="row">
            <div class="col s8 m8 offset-m2">
                <ul class="collapsible popout z-depth-2">
                    <li>
                        <div class="collapsible-header">
                            <img class="circle unit-icon" src="{{ asset('imgs/img_website_style/greey-image.jpg') }}" alt="">                        
                            <h6 class="unit-title"><strong>Titulo da Unidade - Conteúdo</strong></h6>
                            <div class="progress col s4 m4 green lighten-4">
                                <div class="determinate green darken-1" style="width: 70%"></div>
                                <div>70%</div>
                            </div>
                        </div>
                        <div class="collapsible-body">                      
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <img class="circle" src="{{ asset('imgs/img_website_style/greey-image.jpg') }}" alt="">
                                    <div>
                                        Alvin<a href="#!" class="secondary-content">
                                        <i class="material-icons">send</i></a>
                                    </div>
                                </li>
                                <li class="collection-item avatar">
                                        <img class="circle" src="{{ asset('imgs/img_website_style/greey-image.jpg') }}" alt="">
                                    <div>
                                        Alvin<a href="#!" class="secondary-content">
                                        <i class="material-icons">send</i></a>
                                    </div>
                                </li>
                                <li class="collection-item avatar">
                                    <img class="circle" src="{{ asset('imgs/img_website_style/greey-image.jpg') }}" alt="">
                                    <div>
                                        Alvin<a href="#!" class="secondary-content">
                                        <i class="material-icons">send</i></a>
                                    </div>
                                </li>
                                <li class="collection-item avatar">
                                    <img class="circle" src="{{ asset('imgs/img_website_style/greey-image.jpg') }}" alt="">
                                    <div>
                                        Alvin<a href="#!" class="secondary-content">
                                        <i class="material-icons">send</i></a>
                                    </div>
                                </li>
                            </ul>                   
                        </div>
                    </li>
                </ul>
            </div>
        </div>      
    </main>
@endsection