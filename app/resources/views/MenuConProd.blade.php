@extends('layout')

@section('tittle', 'Consulta de Producto')

@section('content')
    <h1>Consulta de productos</h1>
    <ul>
        @foreach ($prod as $producto)
        <li> 
            <a href="{{route('ConEsp',$producto->id)}}">{{$producto->name}} 

            </a> 
    
        </li> 


        @endforeach

        <a href="{{route('AddProduct', $producto->id)}}"> Agregar Producto</a>
    </ul>
@endsection

