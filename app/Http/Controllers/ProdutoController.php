<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Requests;
use Validator;

class ProdutoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $arrayproduto=Produto::all();
      return view('produto/index',compact('arrayproduto'));
    }

    public function create(){
      return view('produto/create');
    }

    public function store(Request $request){
      $this->validate($request, [
          'produto' => 'required|max:255',
      ]);

      $produto = new Produto;
      $produto->produto = $request->produto;
      $produto->save();
      return redirect('/produto');
    }

    public function show($id){
      $produto = Produto::findOrFail($id);
      return view('produto.show',compact('produto'));
    }

    public function edit(Request $request){
      $id = $request->id;
      $produto = Produto::findOrFail($id);
      return view('produto.edit',compact('produto'));
    }

    public function update(Request $request){
      $produto = Produto::findOrFail($request->id);
      $produto->produto = $request->produto;
      $produto->save();
      return redirect('/produto');
    }

    //
    public function destroy($id){
      Produto::findOrFail($id)->delete();
      return redirect('/produto');
    }

}
