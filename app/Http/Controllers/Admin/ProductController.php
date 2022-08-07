<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        return view('admin.product.index',compact('product'));
    }
    public function add(){
        $data['category']= Category::all();
        $data['formtype']="add";

        return view('admin.product.add',compact('data'));
    }
    public function insert(Request $request){
        $category= new Category;
        $product=new Product();
        if($request->hasFile('prodimage')){
            $file=$request->file('prodimage');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $product->product_image=$filename;
        }
        $product->product_name=$request->input('prodname');
        $product->product_description=$request->input('proddescr');
        $product->category=$request->input('prodcate');
        $product->unit_price=$request->input('prodprice');
        $product->available_stock=$request->input('prodquan');

        $product->save();
        return redirect('products')->with('status','Product Added Successfully.');
    }
    public function edit($id){
        $data['formtype']="edit";
        $data['category']= Category::all();
        $data['product']=Product::find($id);

        return view('admin.product.add',compact('data'));
    }
    public function update(Request $request,$id){
        $product=Product::find($id);
        if($request->hasFile('prodimage')){
            $path='assets/uploads/products/'.$product->product_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('prodimage');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $product->product_image=$filename;
        }
        $product->product_name=$request->input('prodname');
        $product->product_description=$request->input('proddescr');
        $product->category=$request->input('prodcate');
        $product->unit_price=$request->input('prodprice');
        $product->available_stock=$request->input('prodquan');

        $product->update();
        return redirect('products')->with('status','Product Updated Successfully.');
    }
    public function delete(Request $request,$id){
        $product=Product::find($id);
        if($product->prodimage){
            $path='assets/uploads/products/'.$product->product_image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('categories')->with('status','Product Deleted Successfully.');
    }
}
