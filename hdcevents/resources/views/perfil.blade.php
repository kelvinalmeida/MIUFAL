@extends('layouts.mainPerfil')

@section('title', 'Meu Perfil')

@section('content')

<div id="conteudo">
        
        <h1>Meu Perfil</h1>

        <div id="text_foto_dado">
            <p id="fotoDoPerfil">Foto do Perfil</p>
            <p id="dadosDeCadastro">Dados de Cadastro:</p>
        </div>

        <div id="form_img">

            <img src="/img/perfil.png" alt="foto de perfil">

            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" class="form-control" placeholder="João" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="email" class="form-control" placeholder="joao@email.com" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Telefone</span>
                    <input type="tel" class="form-control" placeholder="98888-3333" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
            </form>
        </div>

        <div id="button">
            <button type="button" class="btn btn-light" onclick="window.location.href = '/'">Voltar</button>
            <button type="button" class="btn btn-light" onclick="window.location.href = '/alterardados'">Alterar Dados</button>
        </div>

    </div>

    @endsection