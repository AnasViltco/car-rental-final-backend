<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
class VehicleController extends Controller
{
    public function index()
    {
        $category = Brand::all();
        return view('createvehicals',compact('category'));
    }

    public function save(Request $request)
    {
        $contact = Vehicle::create($request->all());
        return back();
        
    }

    public function list()
    {
         $category = Vehicle::all();
        return view('managevehicle',compact('category'));
        
    }

    public function deletevehicle($id)
    {
        $user = Vehicle::find($id);
        $user->delete();
        return back();
    }
}
