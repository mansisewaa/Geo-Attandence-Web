<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public Function login (Request $request){
        $loginDetails = $request->only('Email','password');
        
        if(Auth::attempt($loginDetails)) {
            return response()->json(['message'=> 'login Succcesful']);

        } else {
            return response()->json(['message' => 'wrong login details']);
        }
    }
}
