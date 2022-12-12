@extends('layouts.mainFila')

@section('title', 'Fila')

@section('content')

<div id="conteudo">
    <h1>Veja a Situação da Fila em Tempo Real!</h1>
        
    <div id="emojis">
        @auth
        <form id="form" action="/fila" method="POST">
            @csrf 
            <div id="conteinerDeEmogi">
                <div id="emogiVoto" class="form-check">
                    <p>{{$situacao1}}</p>
                    <label class="form-check-label" for="situacao1">
                        <a>
                            <i class="fas fa-sad-tear fa-4x"></i>
                        </a>
                    </label>
                    <input class="form-check-input" type="radio" name="fila" id="situacao1" value=1>
                </div>
                <div id="emogiVoto" class="form-check">
                    <p>{{$situacao2}}</p>
                    <label class="form-check-label" for="situacao3">
                        <a>
                            <i class="fas fa-meh fa-4x"></i>
                        </a>
                    </label>
                    <input class="form-check-input" type="radio" name="fila" id="situacao3" value='2'>
                </div>
                <div id="emogiVoto" class="form-check">
                    <p>{{$situacao3}}</p>
                    <label class="form-check-label" for="situacao4">
                        <a>
                            <i class="fas fa-smile fa-4x"></i>
                        </a>
                    </label>
                    <input class="form-check-input" type="radio" name="fila" id="situacao4" value='3'>
                </div>
                <div id="emogiVoto" class="form-check">
                    <p>{{$situacao4}}</p>
                    <label class="form-check-label" for="situacao5">
                        <a>
                            <i class="fa-solid fa-face-laugh fa-4x"></i>
                        </a>
                    </label>
                    <input class="form-check-input" type="radio" name="fila" id="situacao5" value='4'>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Votar</button>
            </div>
        </form>


        <!-- <form action="/filaDestroy" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btnDelete">Deletar</button>
        </form> -->
        @endauth

        <div id="situacaoDaFila">
            <i class="fas {{$maior}} fa-10x"></i>
        </div>

        <p>Quantidade de Votos: {{$cont}}</p>
        <!-- <p>{{$situacao1}}</p> -->
        <!-- <p>Soma Total dos Votos: {{$situacaoDaFila}}</p> -->
        <!-- <div id="info">    
            <p><i class="fas fa-sad-tear fa-2x"></i> {{$situacao1}}</p>
            <p><i class="fas fa-meh fa-2x"></i> {{$situacao2}}</p>
            <p><i class="fas fa-smile fa-2x"> {{$situacao3}}</p>
            <p><i class="fas fa-face-laugh fa-2x"></i> {{$situacao4}}</p>
        </div> -->
    </div>
</div>

@endsection