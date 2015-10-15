@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="ugly-circle"></div>
        <div class="text-intro">Fotoaparat je le polovica zgodbe o fotografiji!</div>
        <button type="button" class="button-descopera">Poženi aplikacijo!</button>
    </div>

    <input type="submit" class="submit-button" value="Submit"/>

    <!--Obiective-->
    <div class="obiectiv_unu obiective obiective-submit"><img src="img/Obiective/obiectiv2.png"/></div>
    <div class="obiectiv_doi obiective obiective-submit"><img src="img/Obiective/obiectiv1.png"/></div>
    <div class="obiectiv_trei obiective obiective-submit"><img src="img/Obiective/canon_50mm.png"/></div>
    <div class="obiectiv_patru obiective obiective-submit"><img src="img/Obiective/obiectiv3.png"/></div>
    <!--/Obiective-->
@stop

@section('js')
    <script src="/js/home/index.js"></script>
@stop
