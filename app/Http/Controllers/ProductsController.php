<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index() {
        $title = 'Laravel Course';
        $x = 2;
        $y = 1;
        $name = 'Linh';
        return view('products.index', compact('title', 'x', 'y', 'name'));
    }
    public function about(){
        return 'This is about page';
    }
}
