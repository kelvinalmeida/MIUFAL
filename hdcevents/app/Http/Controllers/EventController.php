<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        
        $events = Event::all();
        
        return view('welcome', [
            'events' => $events
        ]);
    }

    public function cardapio() {
        return view('cardapio'); 
    }

    public function fila() {
        return view('fila');
    }

    public function perfil() {
        return view('perfil');
    }

    public function alterarDados() {
        return view('alterarDados');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function login() {
        return view('login');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->nome = $request->nome;
        $event->email = $request->email;
        $event->telefone = $request->telefone;
        $event->senha = $request->senha;
        $event->fila = 0;
        
        $event->save();
        
        return redirect('/')->with('msg', 'Conta Criada com Sucesso!');
    }
}
