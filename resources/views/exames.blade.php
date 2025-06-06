@extends('layout.layout2')
@section('title', 'Trabmed-Informações')
@section('conteudo')


<div id="informar" class="col-md-6 offset-md-3">
<h1>Publicar informações</h1>
<form action="/noticias" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" Placeholder="Digite o título da notícia">
    </div>
    
    
    <div class="form-group">
        <label for="descricao">Descrição</label>
<textarea name="descricao" id="descricao"  class="form-control" placeholder="Qual é a informação?"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Publicar" name="publicar">


</form>



</div>




@endsection