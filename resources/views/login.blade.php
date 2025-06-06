@extends('layout.layout2')
@section('title', 'Trabmed-Login')
@section('conteudo') 

<main class="content-login position-center">
<div id="informar" class="col-md-4 offset-md-2 ">
<h1>Inicie Sessão</h1>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Nome de Utilizador</label>
        <input type="text" class="form-control" id="campo" name="user" Placeholder="Insira o nome de Utilizador">
    </div>
     <div class="form-group">
        <label for="pasword">Palavra-Passe</label>
        <input type="password" class="form-control" id="campo" name="pass" Placeholder="Insira a tua Palavra-Passe">
    </div>
    
    
    
    <input type="submit" class="btn btn-primary" value="Entrar" name="entrar">


</form>

</main>





@endsection