@extends('master')
    @section('contenido') 
    <br>  
    
    <h2> Actualizar Libro </h2>
    <form action="{{ route('act_Exitosa') }}" method="POST">
        @csrf
       
        <input type="numberUp" id='txtIdLib' name='txtIdLib' value="{{$libro->id}}" hidden>

        <label for="txtisbnUp">ISBN</label>
        <input type="text" id='txtisbnUp' name='txtisbnUp' class="form-control" value="{{$libro->ISBN}}" required> <br> 
    
        <label for="txtTituloUp">Título </label>
        <input type="text" id='txtTituloUp' name='txtTituloUp' class="form-control" value="{{$libro->titulo}}" required>  <br>

        <label for="txtPrecioUp">Precio </label>
        <input type="number" id='txtPrecioUp' name='txtPrecioUp' min= "100" class="form-control" value="{{$libro->precio}}" required>  <br>

        <label for="txtStockUp">Stock </label>
        <input type="number" id='txtStockUp' name='txtStockUp' min= "0" class="form-control" value="{{$libro->stock}}" required>  <br>
        
        <label for="slceditorialUp">Editorial </label>
        <select class="form-select" aria-label="Default select example" name="slceditorialUp">
        @foreach($editorial as $e)
            <option value="{{$e->id}}" > {{$e->nombre}} </option>
        @endforeach
        </select>
    
        <br> <br>
        <button type="submit" class="btn btn-primary">Actualizar </button>

    </form>
    <br>
@stop