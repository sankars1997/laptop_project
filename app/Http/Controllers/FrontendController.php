<?php

namespace App\Http\Controllers;

use App\Models\Issued;
use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Models\Laptop;

class FrontendController extends Controller
{


   
    
public function Instock(){
    $submitteds = Submitted::where('active', 1)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('instock',compact('submitteds'));
}


public function Issuedlaptop(){
    $issueds = Issued::where('active', 0)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('issuedlaptop',compact('issueds'));
}


public function Search(Request $request){
    $searchinput = $request->input('searchinput');
    $submittedResults = Submitted::where('Serial_no', '=', $searchinput )->get();
    $issuedResults = Issued::where('Serial_no', '=', $searchinput )->get();
    $results = $issuedResults->merge($submittedResults);
    return view('welcome',compact('results'));
    return $this->issued($searchinput);
}





    public function issued()
    {
        
        return view('issued');
    }
}

