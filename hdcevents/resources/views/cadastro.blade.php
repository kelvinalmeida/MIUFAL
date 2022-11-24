@extends('layouts.mainCadastro')

@section('title', 'Cadastro')

@section('content')

<div id="telaLogin">
    <h1>Cadastro MIUFAL</h1>
    <form action="/cadastro" method="POST">
      @csrf
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nome</span>
          <input type="text" name="nome" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Email</span>
          <input type="email" name="email" class="form-control" placeholder="joao@email.com" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Telefone</span>
          <input type="tel" name="telefone" class="form-control" placeholder="(82) 99999-9999" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Senha</span>
          <input type="password" name="senha" class="form-control" placeholder="João" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
      </div>
    </form>
    <div id="inscrever">
      <p>Já tem conta?</p>
      <a href="login">Faça Login</a>
    </div>
  </div>

  @endsection
