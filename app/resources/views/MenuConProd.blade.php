@extends('layout')

@section('tittle', 'Consulta de Producto')

    




@section('content')
    <h1>Consulta de productos</h1>
    <ul>
        @foreach ($prod as $producto)
        <li> 
            <a href="{{route('producto.ConEsp',$producto->id)}}">{{$producto->name}} 

            </a> 
    
        </li> 


        @endforeach

        <a href="{{route('producto.AddProduct', $producto->id)}}"> Agregar Producto</a>
    </ul>


    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <div class= "container mx-auto">
        <x-alert />

        <x-alert2 color="blue"/>



    </div>


    

@endsection

