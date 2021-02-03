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
        ->orderby('id','asc')
        ->get();   
        return view('listar.listar_libros',['book' => $libro] );
    }
    public function getEditorial(){
        $editoriales = Editorial::all();
        return view('listar.listar_editoriales', ['edits' => $editoriales]);  
    }
    public function regLibro(){
        $editoriales = Editorial::all();
        return view('registrar.libro',['edits' => $editoriales]);  
    }
    public function regExito(Request $request){
        $libro = new Libro();
        $libro->ISBN = $request->input('txtisbn');
        $libro->titulo = $request->input('txtTitulo');
        $libro->precio = $request->input('txtPrecio');
        $libro->stock = $request->input('txtStock');
        $libro->id_editorial = $request->input('slceditorial');
        $libro->save();
        return redirect()->route('libros');  
    }

    public function upformLibro($id){
        $libro = Libro::findOrFail($id);
        $editorial = Editorial::all();
        return view ('actualizar.actualizar_libro', compact('libro','editorial'));
    }

    public function upExito(Request $request){
        $l = $request->input('txtIdLib');
        $lib = Libro::find("$l");
        $lib -> ISBN = $request->input('txtisbnUp');
        $lib -> titulo = $request->input('txtTituloUp');
        $lib -> precio = $request->input('txtPrecioUp');
        $lib -> stock = $request->input('txtStockUp');
        $lib -> id_editorial = $request->input('slceditorialUp');
        $lib -> save(); 
        return redirect()->route('libros');  
    }
}