@extends('layouts.mainPerfil')

@section('title', 'Meu Perfil')

@section('content')

<div id="conteudo">
<h1>Meu Perfil</h1>

<!-- <div id="text_foto_dado">
    
    
</div> -->

<div id="form_img">
    
    <div id="fotoPerfil">
    <p id="fotoDoPerfil">Foto do Perfil</p>
        <img src="/img/events/{{$user->profile_photo_path}}" alt="foto de perfil">
    </div>
    
    <form id="form1">
        <p id="dadosDeCadastro">Dados de Cadastro:</p>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nome</span>
            <input type="text" class="form-control" placeholder="{{$user->name}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="email" class="form-control" placeholder="{{$user->email}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Data De Criação</span>
            <input type="email" class="form-control" placeholder="{{$user->created_at}}" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>
        <!-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel</span>
            <input type="tel" class="form-control" placeholder="(82) 9999-9999" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div> -->
    </form>
    </div>
    
    <div id="button">
        <button type="button" class="btn btn-light" onclick="window.location.href = '/'">Voltar</button>
        <button type="button" class="btn btn-light" onclick="window.location.href = '/alterardados'">Alterar Dados</button>
    </div>
        
</div>
    @endsection