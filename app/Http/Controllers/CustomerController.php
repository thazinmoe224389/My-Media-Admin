<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function outputHello(){
        dd("hello");
    }

    public function compactList(){
        $message = 'hello this is compact testing message';
        $error="this is error message";
        $name = "my name is sithu";

        return view('compactTest',compact('message','error','name'));
    }
}
