<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Laptop;

class FrontendController extends Controller
{
    
public function Instock(){
    $laptops = Laptop::where('active', 1)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('instock',compact('laptops'));
}


public function Issuedlaptop(){
    $laptops = Laptop::where('active', 0)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('instock',compact('laptops'));
}


}
