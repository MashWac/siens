<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function add(){
        $data['formtype']="add";
        return view('admin.category.add',compact('data'));
    }
    public function insert(Request $request){
        $request->validate([            
            'catename' => ['required', 'string', 'max:255'],
        ]);
        $category= new Category;
        $category->category_name=$request->input('catename');
        $category->save();
        return redirect('categories')->with('status','Category Added Successfully.');
    }
    public function edit($id){
        $data['formtype']="edit";
        $data['category']= Category::find($id);

        return view('admin.category.add',compact('data'));
    }
    public function update(Request $request,$id){
        $request->validate([            
            'catename' => ['required', 'string', 'max:255'],
        ]);
        $category= Category::find($id);
        $category->category_name=$request->input('catename');
        $category->update();
        return redirect('categories')->with('status','Category Updated Successfully.');
    }
    public function delete(Request $request,$id){
        $category=Category::find($id);
        $category->delete();
        return redirect('categories')->with('status','Category Deleted Successfully.');
    }
    public function view(Request $request,$id){
        $products=Product::all()->where('category',$id);
        return view('admin.category.view',compact('products'));
    }
}
