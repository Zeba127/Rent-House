<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;


class TenantController extends Controller
{

    public function list(){
        $tenants=Tenant::all();
        return view('backend.layouts.tenant', compact('tenants'));

    }
    public function create(Request $request)
    {
        //dd(request->all);
        //insert into tenant table
        Tenant::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'address'=>$request->address,
            'occupation'=>$request->occupation,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
        ]);
        return redirect()->back();
    }
}
