<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsuarioController extends Controller
{
    //
    public function panel(){
        return view('products/product');
    }

    public function access(){
        $product = Product::all();
        $posts = DB::select('select * from categories');
        return view('products/product',['product'=>$product]);

    }

    public function enriqueSaludo(){
        return view('products/enrique');
    }
}
