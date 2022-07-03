<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class UserController extends Controller
{
    public function Redirect(){

        $user = Auth::user();
        $product = Product::all();
        if($user->role == 'user'){
            return view('user.product',compact('product'));
        }
        else {
            return view('admin.home');
        }
}

    public function index(){
        $product = Product::all();
        return view('user.home',compact('product'));
    }
}
