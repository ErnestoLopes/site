<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informations;
use Illuminate\Support\Str;


class InformationController extends Controller
{ public function show()
    {
        $informations = Informations::all();
        return view('welcome', ['informations' => $informations]);
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'title' => 'required|string|max:255',
            'descricao' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Criar um novo registro
        $informations = new Informations;
        $informations->title = $request->title;
        $informations->descricao = $request->descricao;

        // Processar imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $img = $request->file('image');
            $imagename = Str::uuid() . "." . $img->getClientOriginalExtension();
            $path = $img->storeAs('site/imagens/noticias', $imagename, 'public');
            $informations->image = $imagename;
        } else {
            $informations->image = 'flyer CERTO.png'; // Imagem padrão
        }

        $informations->save();

        return redirect('/noticias')->with('msg', 'Informação Publicada');
    }


public function index()
{
    $informations = Informations::all();
    return view('noticias', ['informations' => $informations]);


}}

