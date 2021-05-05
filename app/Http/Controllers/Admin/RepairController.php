<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function repair(){
        return view('backend.layouts.repair.list');
    }
}
