<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Producto;
use App\Models\Empresa;
class PruebasController extends Controller{
    public function index(){
        $categorias=Categoria::all();
        return view("Dinamica",compact("categorias"));
    }
    public function subcatogorias(Request $request){
      if(isset($request->texto)){
            $subcategorias = Subcategoria::whereCategoria_id($request->texto)->get();
            return response()->json(
                [
                    'lista'=>$subcategorias,
                    'success'=>true
                ]
                );
      }else{
        return response()->json(
            [ 
                'success'=>false
            ]
        );
      }
    
    }
    public function empresas(Request $request){
        if(isset($request->texto)){
              $empresas = Empresa::whereSubcategoria_id($request->texto)->get();
              return response()->json(
                  [
                      'lista'=>$empresas,
                      'success'=>true
                  ]
                  );
        }else{
          return response()->json(
              [ 
                  'success'=>false
              ]
          );
        }
      
      }
}