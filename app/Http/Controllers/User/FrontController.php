<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class FrontController extends Controller
{
    public function index(){
        return view('user/homepage');
    }
    public function products(){
        $products=Product::join('tbl_categories','category',"=",'tbl_categories.category_id')->orderBy('category')->get();
        return view('user/products',compact('products'));
    }
    public function cartpage(){
        return view('user/cart');
    }
    
}
