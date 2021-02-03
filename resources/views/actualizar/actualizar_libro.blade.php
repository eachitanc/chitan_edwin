@extends('master')
    @section('contenido') 
    <br>  
    <h2> Actualizar Libro </h2>
    <form action="{{ route('act_Exitosa') }}" method="POST">
        @csrf
       
        <label for="txtisbn">ISBN</label>
        <input type="text" id='txtisbn' name='txtisbn' class="form-control" value="{{$libro->ISBN}}" required> <br> 
    
        <label for="txtTitulo">Título </label>
        <input type="text" id='txtTitulo' name='txtTitulo' class="form-control" value="{{$libro->titulo}}" required>  <br>

        <label for="txtPrecio">Precio </label>
        <input type="number" id='txtPrecio' name='txtPrecio' min= "100" class="form-control" value="{{$libro->precio}}" required>  <br>

        <label for="txtStock">Stock </label>
        <input type="number" id='txtStock' name='txtStock' min= "1" class="form-control" value="{{$libro->stock}}" required>  <br>
        
        <label for="slceditorial">Editorial </label>
        <select class="form-select" aria-label="Default select example" name="slceditorial">
        @foreach($edit as $e)
            <option value="{{$edit->id}}" > {{$edit->nombre}} </option>
        @endforeach
        </select>
    
        <br> <br>
        <button type="submit" class="btn btn-primary">Registrar </button>

    </form>
@stop