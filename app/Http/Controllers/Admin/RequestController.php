<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;

class RequestController extends Controller
{
    public function index(){
        $registros = Subject::all();
        return view('admin.request.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.request.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all;
        //dd($dados);

        Request::create($dados);

        return redirect()->route('admin.request');
    }

    public function editar($id){
        $registro = Request::find($id);
        return view('admin.request.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all;
        //dd($dados);
    
        Request::find($id)->update($dados);
    
        return redirect()->route('admin.request');
    }

    public function detetar($id){
        Curso::find($id)->delete();
        return redirect()->route('admin.request');

    }
}
