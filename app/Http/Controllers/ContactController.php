<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index(Request $request){
       $request->validate([
           'name' => 'requared|min:3'
       ])
        dd($data)
     };
}
