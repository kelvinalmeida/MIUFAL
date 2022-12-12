@extends('layouts.mainHome')

@section('title', 'Home')

@section('content')
    
    @if(session('msg'))
      <p class='msg'>{{ session('msg') }}</p>
    @endif
    
    <div id="conteudo">
        
          <h1>Bem Vindo</h1>

        <a href="/fila">
          <button>Situação da Fila</button>
        </a>
        <a href="/cardapio">
          <button>Cardápio</button>
        </a>
    </div>

@endsection