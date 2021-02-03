@extends('master')
    @section('contenido')
    <br>
    <h2 align="center"> Listado de Libros </h2> <br>

    <table class="table" border='2'>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">ISBN</th>
                <th scope="col">Título </th>
                <th scope="col">Stock </th>
                <th scope="col">Estado </th>
                <th scope="col">Editorial </th>
                <th scope="col">Precio </th>
                <th scope="col">Descuento</th>
                <th scope="col" colspan=2 > <div align="center"> Opción </div></th>
            </tr>
        </thead>
        <tbody>
        @foreach($book as $c)
                <tr>
                    <td> {{ $c->id }} </td>
                    <td> {{ $c->ISBN }} </td>
                    <td> {{ $c->titulo }} </td>
                    <td> {{ $c->stock }}</td>
                    <td>
                        @if($c->stock == 0)
                            Agotado
                        @endif
                        @if($c->stock > 0 && $c->stock < 11)
                            Últimas unidades
                        @endif
                        @if($c->stock > 10)
                            Disponible
                        @endif
                    </td>
                    <td> {{ $c->nombre }} </td>
                    <td> ${{ $c->precio }} </td>
                    <td>
                        @if($c->nombre == "Norma" || $c->nombre == "La Santillana")
                            ${{ $c->precio*0.05 }}
                        @else
                            $ 0
                        @endif
                        
                    </td>
                    <td> <a name href="{{route('formUpLibro',$c->id)}}" class="btn btn-success">Actualizar</a></td>
                </tr>
        @endforeach
        </tbody>
    </table   
    <div><a href="{{route('formRegistrarLibro')}}" class="btn btn-primary">Registrar</a></div>
@stop