@extends('layouts.mainLogin')

@section('title', 'Login')

@section('content')

<div id="telaLogin">
    <h1>MIUFAL</h1>
    <form>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Email</span>
          <input type="email" class="form-control" placeholder="joao@email.com" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Senha</span>
          <input type="password" class="form-control" placeholder="João" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div>
        <a id="buttonAvançar" href="/">Avançar</a>
    </div>
    </form>
    <div id="inscrever">
      <p>Não tem uma conta?</p>
      <a href="/cadastro">Cadastre-se</a>
    </div>
  </div>

@endsection