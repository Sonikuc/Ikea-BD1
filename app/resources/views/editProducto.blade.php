@extends('layout')

@section('tittle', 'Actualizar Informacion')

@section ('content')
    <h1>Modificando Informacion</h1>

    <form action="{{route('producto.ProdUpdate', $prod)}}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre: <br>
            
                <input type="text", name="name"  value = "{{old('name', $prod->name)}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Nombre Sueco: <br>
                <input type="text", name="nsueco" value = "{{old('nsueco', $prod->nsueco)}}">
        </label>

        @error('nsueco')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Montaje:<br>
                <input type="text" name="montaje" value = "{{old('montaje', $prod->montaje)}}">
        </label>

        @error('montaje')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Tipo: <br>
                <input type="text", name="tipo" value = "{{old('tipo', $prod->tipo)}}">
        </label>

        @error('tipo')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>  
        <label>
        Caracteristicas: <br>
                <textarea name="caract" rows="3">{{old('caract', $prod->caract)}}</textarea>
        </label>

        @error('caract')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Instrucciones: <br>
            <textarea name="instrucc" rows="3">{{old('instrucc', $prod->instrucc)}}</textarea>
        </label>

        @error('instrucc')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <label>
            Descripcion:  <br>   
            <textarea  name="descrip", rows="3">{{old('descrip', $prod->descrip)}}</textarea>
        </label>

        @error('descrip')
            <br>
                <small>*{{$message}}</small>    
            <br>
        @enderror

        <br>
        <button type="submit"> Actualizar</button>

    </form>
@endsection