<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eShop_controller extends Controller
{
    public function all_products(){
        return view('all_products');
    }
    public function contact(){
        return view('contact');
    }
}
