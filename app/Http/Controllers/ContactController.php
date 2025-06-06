<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


   
class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'cont' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::raw(
            "Nome: {$data['nome']}\nEmail: {$data['email']}\nContacto: {$data['cont']}\nMensagem: {$data['message']}",
            function ($message) {
                $message->to('eplopes000@gmail.com')
                        ->subject('Nova mensagem de contato do site');
            }
        );

        return redirect('/contacto');
    }
}

