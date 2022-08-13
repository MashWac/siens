<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\File;

class FrontController extends Controller
{
    public function index(){
        return view('user/homepage');
    }
    public function products(){
        $data['products']=Product::join('tbl_categories','category',"=",'tbl_categories.category_id')->orderBy('category')->paginate(6);
        return view('user/products',compact('data'));
    }
    public function cartpage(){
        $productcart=[];
        if(Session::has('cart')){
            foreach(session('cart') as $item){
                array_push($productcart,$item);
            }
        }
        return view('user/cart',compact('productcart'));
    }
    public function viewproduct($id){
        $product=Product::find($id);
        return view('user/viewproduct', compact('product'));
    }
    public function addtocart($id){
        session();
        $product=Product::find($id);
        
        
        if(Session::has('cart')){
            $item_array_id=array_column(session('cart'),"product_ID");
            if(!in_array($id,$item_array_id)){
                $count=count(session('cart'));
                $item_array=array('product_ID'=>$id,'Quantity'=>1,'stock'=>$product->stock_available,'price'=>$product->unit_price,'productname'=>$product->product_name,'subtotal'=>$product->unit_price);
                Session::push('cart', $item_array);
                return redirect('prodpage')->with('status','Item Has Been Added To Cart.');

            }
            else{
                return redirect('prodpage')->with('status','Item Is Already In Cart.');
            }
        }else{
            $item_array=array('product_ID'=>$id,'Quantity'=>1,'stock'=>$product->stock_available,'price'=>$product->unit_price,'productname'=>$product->product_name,'subtotal'=>$product->unit_price);
            $productdata[0]=$item_array;
            Session::put('cart', $productdata);
            return redirect('prodpage')->with('status','Item Has Been Added To Cart.');
        }

    }
    public function updatequantity(Request $request){
        $product_quantity=$request->input('productquantity');
        $product_id=$request->input('prodid');
        $prodprice=$request->input('prodprice');
        $prodstock=$request->input('prodstock');
        $items = Session::get('cart', []);


        foreach($items as &$item){
            if($item['product_ID']==$product_id){
                if($item['stock']<$product_quantity){
                    return redirect('cart')->with('status','Quantity Is Greater Than Available Stock. Please Select a Different Value');
                }else{
                    $item['Quantity']=$product_quantity;
                    $item['subtotal']=intval($prodprice)*intval($product_quantity);
                    Session::put('cart', $items);
                    return redirect('cart')->with('status','Quantity has been updated.');
                }
            }
        }
    }
    public function deletefromcart($id){
        foreach(session('cart') as $key=>$value){
            if($value['product_ID']==$id){
                Session::pull('cart.'.$key); 
                return redirect('cart')->with('status','Item Has Been Removed From Cart.');
            }
        }
                    
    }
    
}
