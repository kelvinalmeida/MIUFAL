@extends('layouts.mainAlterarDados')

@section('title', 'Alterar Dados')

@section('content')

<div id="conteudo">
        
        <h1>Alterar Dados</h1>

        <div id="text_foto_dado">
            <p id="fotoDoPerfil">Altere Fotos do Perfil e os dados:</p>
            <!-- <p id="dadosDeCadastro">Dados de Cadastro:</p> -->
        </div>

        <div id="form_img">     
            <form>
                <div id="imgAndInput">
                    <img src="/img/perfil.png" alt="foto de perfil">
                    
                    <div id='imgFile' class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div id='dados'>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" placeholder="João" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" class="form-control" placeholder="joao@email.com" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Telefone</span>
                        <input type="tel" class="form-control" placeholder="98888-3333" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Senha</span>
                      <input type="password" class="form-control" placeholder="Sigite a Nova Senha" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
            </form>
        </div>

        <div id="button">
            <button type="button" class="btn btn-light ajuste" onclick="window.location.href = '/perfil'">Voltar</button>
            <button type="button" class="btn btn-light ajuste" onclick="window.location.href = '#'">Confirmar</button>
        </div>

    </div>

    @endsection