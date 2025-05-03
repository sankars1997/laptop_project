<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Laptop;

class FrontendController extends Controller
{
    
public function InstockPage(){
    $laptops=Laptop::all();
    return view('instock',compact('laptops'));
}

}
#
