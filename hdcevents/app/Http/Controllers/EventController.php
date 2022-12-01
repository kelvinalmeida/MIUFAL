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

        // Peganto todos no banco
        $events = Event::all();

        // Contando os usuários que votaram. Se votou então: fila != -1
        $cont = 0;
        foreach($events as $event) {
                $cont++;
        }
        
        return view('fila', [
            'events' => $events,
            'cont' => $cont
        ]);
    }

    public function perfil() {

        $events = Event::all();

        return view('perfil', [
            'events' => $events
        ]);
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

        $event = new Event; // Pode salvar essa variavel fora coloca-la em todos os metodos(fila, perfil, ...).

        // $event->nome = $request->nome;
        // $event->email = $request->email;
        // $event->telefone = $request->telefone;
        // $event->senha = $request->senha;
        // $event->fila = 0;

        $event->fila = $request->fila;
        
        // $user = auth()->user();
        // $event->user_id = $user->id;
        // $event->user_id = 2;

        $event->save();
        
        return redirect('/fila');
        // return redirect('/')->with('msg', 'Conta Criada com Sucesso!');
    }
}
