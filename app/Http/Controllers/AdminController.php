<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productForm(){
        return view('admin.uploadProduct');
    }
    public function addProduct(Request $request){
        // $request->validate(['title'=>$request-'title','desc'=>$request-'desc','price'=>$request-'price','quantity'=>$request-'quantity','img'=>$request-'img',]);
        $request->validate(['title'=>'required','desc'=>'required','quantity'=>'required','price'=>'required','img'=>'required',]);
        $file=$request->file('img');
        $imgName = $file->getClientOriginalName();
        $folder=$file->move(public_path()."\admin\assets\images\product-img",$imgName);
        $product = Product::create(['title'=>$request->title,'desc'=>$request->desc,'price'=>$request->price,'quantity'=>$request->quantity,'img'=>$folder]);
        return redirect()->back()->with('message','Product Added Successfully');
    }
}
