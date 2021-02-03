<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Editorial;
use App\Models\Libro;

class AdminController extends Controller
{
    public function getLibros(){
        $libro = DB::table('libro')
        ->join('editorial', 'libro.id_editorial', '=', 'editorial.id')
        ->select('libro.id','libro.ISBN', 'libro.titulo','libro.stock','editorial.nombre','libro.precio')
        ->get();   
        return view('listar.listar_libros',['book' => $libro] );
    }
    public function getEditorial(){
        $editoriales = Editorial::all();
        return view('listar.listar_editoriales', ['edits' => $editoriales]);  
    }
}
