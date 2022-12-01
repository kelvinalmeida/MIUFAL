@extends('layouts.mainFila')

@section('title', 'Fila')

@section('content')

<div id="conteudo">
    <h1>Veja a Situação da Fila em Tempo Real!</h1>
        
    <div id="emojis">
        @auth
        <form action="/fila" method="POST">
            @csrf 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="fila" id="situacao1" value=1>
                <label class="form-check-label" for="situacao1">
                    <a>
                        <i class="fas fa-sad-tear fa-4x"></i>
                    </a>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="fila" id="situacao3" value='2'>
                <label class="form-check-label" for="situacao3">
                    <a>
                        <i class="fas fa-meh fa-4x"></i>
                    </a>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="fila" id="situacao4" value='3'>
                <label class="form-check-label" for="situacao4">
                    <a>
                        <i class="fas fa-smile fa-4x"></i>
                    </a>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="fila" id="situacao5" value='4'>
                <label class="form-check-label" for="situacao5">
                    <a>
                        <i class="fa-solid fa-face-laugh fa-4x"></i>
                    </a>
                </label>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Votar</button>
            </div>
        </form>
        @endauth

        <div id="situacaoDaFila">
            <i class="fas fa-smile fa-10x"></i>
        </div>

        <p>Quantidade de Votos: {{$cont}}</p>
    </div>
</div>

@endsection