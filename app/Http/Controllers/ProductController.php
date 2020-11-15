<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('productos.product');
        
    }
    public function indexa1(){
        return view('productos.productca1');
        
    }
    public function indexa2(){
        return view('productos.productca2');
        
    }
    public function indexa3(){
        return view('productos.productca3');
        
    }
    public function indexa4(){
        return view('productos.productca4');
        
    }
    public function indexa5(){
        return view('productos.productca5');
        
    }
       public function indexb1(){
        return view('productos.productcb1');
        
    }
     public function indexb2(){
        return view('productos.productcb2');
        
    } 
    public function indexc1(){
        return view('productos.productcc1');
        
    }
     public function indexc2(){
        return view('productos.productcc2');
        
    }
    public function indexc3(){
        return view('productos.productcc3');
        
    }
    public function indexcc4(){
        return view('productos.productcc4');
    }
}
