@extends('layout')

@section('tittle', 'Añadir Producto')

@section ('content')
   <h1>Agregar Producto</h1>
   <form action="{{route('productStore')}}" method="POST">

        @csrf

        <label>
            Nombre:<br>
                <input type="text", name="name" value = "{{old('name')}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Nombre Sueco: <br>
                <input type="text", name="nsueco" value = "{{old('nsueco')}}">
        </label>

        @error('nsueco')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Montaje: <br>
                <input type="text" name="montaje" value = "{{old('montaje')}}">
        </label>

        @error('montaje')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Tipo: <br>
                <input type="text", name="tipo" value = "{{old('tipo')}}">
        </label>

        @error('tipo')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>  
        <label>
        Caracteristicas: <br>
                <textarea  name="caract" rows="3" >{{old('caract')}}</textarea>
        </label>

        @error('caract')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Instrucciones: <br>
            <textarea name="instrucc" rows="3">{{old('instrucc')}}</textarea>
        </label>

        @error('instrucc')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Descripcion:  <br>   
            <textarea name="descrip" rows="3">{{old('descrip')}}</textarea>
        </label>

        @error('descrip')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <button type="submit"> Agregar</button>

    </form>


@endsection