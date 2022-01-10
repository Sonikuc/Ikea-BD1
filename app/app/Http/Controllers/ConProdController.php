<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ConProdController extends Controller
{
    public function MenuConProd1(){

        $prod = Producto::orderBy('id', 'asc')->paginate();

       // return ($prod);

        return view('MenuConProd', compact('prod'));
    }

    public function ConProdEsp($id){
        $prod = Producto::find($id);
        
        return view('ProdEsp', compact('prod'));
    }

    public function AddProd(){
        
        return view('addproduc');

    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'nsueco' => 'required',
            'montaje' => 'required',
            'tipo' => 'required',
            'caract' => 'required',
            'instrucc' => 'required',
            'descrip' => 'required'
        ]);

        $prod = new Producto;

        $prod->name = $request->name;
        $prod->nsueco = $request->nsueco;
        $prod->montaje = $request->montaje;
        $prod->tipo = $request->tipo;
        $prod->caract = $request->caract;
        $prod->instrucc = $request->instrucc;
        $prod->descrip = $request->descrip;

        $prod->save();
        
        return redirect()->route('ConEsp', $prod->id);


    }

    public function edit($id){
        $prod = Producto::find($id);
        return view('editProducto', compact('prod'));        

    }

    public function update($id, Request $request){

        $request->validate([
            'name' => 'required',
            'nsueco' => 'required',
            'montaje' => 'required',
            'tipo' => 'required|max:3',
            'caract' => 'required',
            'instrucc' => 'required',
            'descrip' => 'required'
        ]);

        $prod = Producto::find($id);
        $prod->name = $request->name;
        $prod->nsueco = $request->nsueco;
        $prod->montaje = $request->montaje;
        $prod->tipo = $request->tipo;
        $prod->caract = $request->caract;
        $prod->instrucc = $request->instrucc;
        $prod->descrip = $request->descrip;

        $prod->save();
        
        return redirect()->route('ConEsp', $prod->id);


    }
  
}
