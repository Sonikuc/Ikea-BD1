@extends('layout')

@section('tittle', 'Consultando Producto')

@section ('content')
    <h1>Nombre: {{$prod->name}}</h1>
    <h2>Nombre Sueco: {{$prod->nsueco}}</h2>
    <h2>Descripcion: {{$prod->descrip}}</h2>
    <h2>Caracteristicas: {{$prod->caract}}</h2>
    <h2>Instrucciones: {{$prod->instrucc}}</h2>
    <h2>{{$prod->montaje}}</h2>
    <h2>tipo: {{$prod->tipo}}</h2>
    
    
    
    <a href="{{route('editProd', $prod)}}">Editar Informacion</a> <br> <br>
    <a href="{{route('ConProdAll')}}">Volver al inicio</a>

@endsection
  
