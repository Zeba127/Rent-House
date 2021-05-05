<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use Illuminate\Http\Request;
use App\Models\Floor;

class FloorController extends Controller
{
    public function list(){

        $floors=Floor::with('floorflat')->get();
        // dd($floors);
        return view('backend.layouts.floor.info',compact('floors'));
    }
    public function createinfo(){
        $floors=Floor::all();
        $flats=Flat::all();
        // dd($flats);

        return view('backend.layouts.floor.create',compact('floors','flats'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Floor::create([
            'id'=>$request->id,
            'floor_id'=>$request->floor_id,
            'floor_name'=>$request->floor_name,
            'floor_status'=>$request->floor_status,
            'floor_size'=>$request->floor_size,
            'floor_description'=>$request->floor_description,
            'flat_id'=>$request->flat_id,




        ]);

        return redirect()->route('floor.info');
    }


}
