<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index() {
        
        $events = Event::all();
        $usuario = auth()->user();
        
        return view('welcome', [
            'events' => $events,
            'usuario' => $usuario
        ]);
    }

    public function cardapio() {
        return view('cardapio'); 
    }

    public function fila() {

        // Peganto todos no banco
        $events = Event::all();

        
        $cont = 0; // Contando quantidade de votos
        
        $situacaoDaFila = 0; // Fazendo a Media
        $situacao1 = 0; // Fazendo a Media
        $situacao2 = 0; // Fazendo a Media
        $situacao3 = 0; // Fazendo a Media
        $situacao4 = 0; // Fazendo a Media
        
        foreach($events as $event) {
            $cont++;
            $situacaoDaFila += $event->fila;
            
            if($event->fila == 1) {
                $situacao1++; // Fazendo a Media
            }
            else if($event->fila == 2) {
                $situacao2++; // Fazendo a Media
            }
            else if($event->fila == 3) {
                $situacao3++; // Fazendo a Media
            }
            else if($event->fila == 4) {
                $situacao4++; // Fazendo a Media
            }
        }

        $maior = 'fa-face-laugh';

        if($situacao1 > $situacao2 && $situacao1 > $situacao3 && $situacao1 > $situacao4){
            $maior = 'fa-sad-tear';
        }
        else if($situacao2 > $situacao1 && $situacao2 > $situacao3 && $situacao2 > $situacao4){
            $maior = 'fa-meh';
        }
        else if($situacao3 > $situacao1 && $situacao3 > $situacao2 && $situacao3 > $situacao4){
            $maior = 'fa-smile';
        }
        else if($situacao4 > $situacao1 && $situacao4 > $situacao2 && $situacao4 > $situacao3){
            $maior = 'fa-face-laugh';
        }


        else if($situacao1 == $situacao2 && $situacao1 > $situacao3 && $situacao1 > $situacao4){
            $maior = 'fa-meh';
        }
        else if($situacao2 == $situacao3 && $situacao3 > $situacao1 && $situacao3 > $situacao4){
            $maior = 'fa-smile';
        }
        else if($situacao3 == $situacao4 && $situacao4 > $situacao1 && $situacao4 > $situacao2){
            $maior = 'fa-face-laugh';
        }

        
        else if($situacao1 == $situacao2 && $situacao2 == $situacao3 && $situacao1 > $situacao4){
            $maior = 'fa-meh';
        }
        else if($situacao2 == $situacao3 && $situacao3 == $situacao4 && $situacao2 > $situacao1){
            $maior = 'fa-smile';
        }

        else if($situacao1 == $situacao3){
            $maior = 'fa-smile';
        }

        return view('fila', [
            'events' => $events,
            'cont' => $cont,
            'situacaoDaFila' => $situacaoDaFila,
            'situacao1' => $situacao1,
            'situacao2' => $situacao2,
            'situacao3' => $situacao3,
            'situacao4' => $situacao4,
            'maior' => $maior
        ]);
    }

    public function perfil() {

        // $events = Event::all();

        // return view('perfil', [
        //     'events' => $events
        // ]);
        $user = auth()->user();

        // $user->name = 'Kelvin Santos';

        return view('perfil',[
            'user' => $user
        ]);
    }

    public function alterarDados() {
        $user = auth()->user();

        return view('alterarDados',[
            'user' => $user
        ]);
    }

    public function update(Request $request) {
        // $user = new User;
        $usuario = auth()->user();

        $usuario->name = $request->name; // pega o valor do input username
        $usuario->email = $request->email; // pega o valor do input email

        if (!($request->password == '')) // verifica se a senha foi alterada
        {
            $usuario->password = bcrypt($request->password); // muda a senha do seu usuario já criptografada pela função bcrypt
            // $usuario->password = bcrypt($request->password); // muda a senha do seu usuario já criptografada pela função bcrypt
            // $usuario->password = $request->password; // muda a senha do seu usuario já criptografada pela função bcrypt
        }

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now"));

            $request->image->move(public_path('img/events'), $imageName);

            $usuario->profile_photo_path = $imageName;
        }


        
        $usuario->save(); // salva o usuario alterado =)
        // User::findOrFail($user->id)->update($request->all());
        // User::findOrFail($user->id)->update($request->all());

        return redirect('/perfil');
    }

    public function apagarfila() {
        return view('apagarFila');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function login() {
        return view('login');
    }

    public function destroy() {
        $events = Event::all();

        foreach($events as $event){
            Event::findOrFail($event->id)->delete();
        }

        return redirect('/fila');
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
