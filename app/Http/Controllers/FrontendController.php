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
    $submitteds = Submitted::where('active', 1)->latest()->paginate(5);

   // $laptops=Laptop::where('active',0);
    return view('instock',compact('submitteds'));
}


public function Issuedlaptop(){
    $issueds = Issued::where('active', 0)->latest()->paginate(5);
    
   // $laptops=Laptop::where('active',0);
    return view('issuedlaptop',compact('issueds'));
}


public function Search(Request $request){
    $searchinput = $request->input('searchinput');
    $submittedResults = Submitted::where('Serial_no', '=', $searchinput )->get();
    $issuedResults = Issued::where('Serial_no', '=', $searchinput )->get();

   
    
    $results = $issuedResults->merge($submittedResults);
    
    return view('welcome',compact('results'));
}





public function issued($Serial_no)
{
    
    $laptop=submitted::find($Serial_no);
   
    return view('issued', compact('laptop'));
}


       
    public function submitted($Serial_no){
        $laptop=Issued::find($Serial_no);
   
        return view('submitted', compact('laptop'));
    }

    public function movetoissudes(){
        $laptop=Submitted::find(request('Serial_no'));
        

        $Serial_no =request('Serial_no');
            $specifications =request('specifications') ;
            $college_name = request('college_name');
            $issued_date = request('issued_date');

        Issued::create([
            'Serial_no'=>$Serial_no,
            'specifications' =>$specifications,
            'college_name' => $college_name,
            'issued_date' => $issued_date

        ]);
        $laptop->delete();

        return redirect()->route('welcome')->with('message','issued succesfully');
    }



    public function movetosubmitteds(){
        $laptop=Issued::find(request('Serial_no'));
     
        $Serial_no =request('Serial_no');
            $specifications =request('specifications') ;
            $returned_date = request('returned_date');
        Submitted::create([
            'Serial_no'=>$Serial_no,
            'specifications' =>$specifications,
            
            'returned_date' => $returned_date

        ]);
        $laptop->delete();

        return redirect()->route('welcome')->with('message','returned succesfully');

    }

    public function create(){
        
       return view('create');

    }


    public function save(){
        $Serial_no =request('Serial_no');
        $specifications =request('specifications') ;
        $returned_date = request('returned_date');
    Submitted::create([
        'Serial_no'=>$Serial_no,
        'specifications' =>$specifications,
        
        'returned_date' => $returned_date

    ]);
    return redirect()->route('welcome')->with('message','added succesfully');
    }
}

