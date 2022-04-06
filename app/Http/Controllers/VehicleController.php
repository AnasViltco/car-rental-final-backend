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
        $request_data = $request->all();
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $ext = $image->extension();
            $image_name = time() . uniqid() . '.' . $ext;
            $destinationPath = public_path() . '/images';
            $image->move($destinationPath, $image_name);
            $request_data['image1'] = $image_name;
        }

        $contact = Vehicle::create($request_data);
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
