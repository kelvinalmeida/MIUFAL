@extends('layouts.mainFila')

@section('title', 'Fila')

@section('content')

<div id="conteudo">
    <h1>Veja a Situação da Fila em Tempo Real!</h1>

    <div id="emojis">
        <a href="#">
            <i class="fas fa-sad-tear fa-4x"></i>
        </a>
        <a href="#">
            <i class="fas fa-meh fa-4x"></i>
        </a>
        <a href="#">
            <i class="fas fa-smile fa-4x"></i>
        </a>
        <a href="#">
            <i class="fa-solid fa-face-laugh fa-4x"></i>
        </a>
        <div id="situacaoDaFila">
            <i class="fas fa-smile fa-10x"></i>
        </div>

        <p>Quantidade de Votos: {{$cont}}</p>
    </div>
</div>

@endsection