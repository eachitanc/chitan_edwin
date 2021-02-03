@extends('master')
    @section('contenido')
    <br>
    <h2 align="center"> Listado de Editoriales </h2> <br>

    <table class="table" border='2'>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección </th>
                <th scope="col">Ciudad </th>
                <th scope="col">Teléfono </th>
            </tr>
        </thead>
        <tbody>
        @foreach($edits as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->nombre }} </td>
                <td> {{ $c->direccion }} </td>
                <td> {{ $c->ciudad }}</td>
                <td> {{ $c->telefono }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>   
@stop