<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    public function desh()
    {
        return view('deshbord');
    }
    public function main()
    {
        return view('main');
    }
    public function Service()
     {
         return view ('Service')
     }
}
