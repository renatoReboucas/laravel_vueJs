<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(Request $request){
        // dd($request->filterName);
        if ( isset($request->filterName) ) {
            // dd("filtro");
            $results = Product::select('products.id as id_product','products.name', 'products.description', 'products.price', 'products.thumb_url', 'cg.name as name_category', 'cg.id as id_category')
            ->leftJoin('categories as cg', 'products.id', '=', 'cg.id')
            ->whereRaw('(products.name LIKE  "%'.$request->filterName.'%" )' )
            ->orderBy('products.name')
            ->paginate(10);
        } else{
            $results = Product::select('products.id as id_product','products.name', 'products.description', 'products.price', 'products.thumb_url', 'cg.name as name_category', 'cg.id as id_category')
            ->leftJoin('categories as cg', 'products.id', '=', 'cg.id')
            ->orderBy('products.name')
            ->paginate(10);

        }

        return $results;
        // return view( 'home', compact('results') );

    }
    public function create(Request $request){
        // dd("entrou", $request->all());
        $data = $request->all();
        $saveFile = $this->saveFile($request);
        // dd($saveFile);
        $data['thumb_url'] = $saveFile;
        $save = Product::insert($data);
        // dd($save);
        if(!$save){

            return response()->json("Erro ao salvar produto", 500);
        }
        return "Produto salvo!";



    }
    public function saveFile($request){
        Storage::makeDirectory("/public/image");
        $path = $request->file('thumb_url')->store("/public/image");
        return empty($path) ? false : $path;
    }
    public function product(){
        return view('criacao');
    }

    public function edit(Request $request){
        // dd($request->all());
        $data = $request->all();
        $save = Product::where('id',$data['id'])->update($data);
        if(!$save){

            return response()->json("Erro ao salvar produto", 500);
        }
        return "Produto editado!";
    }

    public function destroy(Request $request){
        $data = $request->all();
        $save = Product::where('id',$data['id'])->delete($data);
        if(!$save){

            return response()->json("Erro ao salvar produto", 500);
        }
        return "Produto deletado!";
    }
}
