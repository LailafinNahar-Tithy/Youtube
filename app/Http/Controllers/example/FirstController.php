<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function aboutIndex()
    {
        return view('about');
    }
    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        return redirect()->action([secondController::class,'test']);
    }

}
