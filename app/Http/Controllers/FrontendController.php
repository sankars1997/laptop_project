<?php

namespace App\Http\Controllers;

use App\Models\Issued;
use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Models\Laptop;

class FrontendController extends Controller
{


    public function Search(){
        return view('welcome');
    }
    
public function Instock(){
    $submitteds = Submitted::where('active', 0)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('instock',compact('submitteds'));
}


public function Issuedlaptop(){
    $issudes = Issude::where('active', 1)->latest()->limit(10)->get();

   // $laptops=Laptop::where('active',0);
    return view('laptop.issued',compact('issudes'));
}





    public function moveToSubmitted($id)
    {
        DB::beginTransaction();

        try {
            // Find the record from issueds table
            $issued = Issued::findOrFail($id);

            // Insert Serialno and specifications into submitteds table
            Submitted::create([
                'Serialno' => $issued->Serialno,
                'specifications' => $issued->specifactions, // assuming this spelling is used
            ]);

            // Delete the record from issueds table
            $issued->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Record successfully moved to Submitteds table.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}

