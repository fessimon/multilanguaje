<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMultilenguaje extends Controller
{
    public function index(Request $request)
    {
        
        if ($request->route()->getName() === 'english.route') {
            app()->setLocale('en');
            return view('en');
        } elseif ($request->route()->getName() === 'spanish.route') {
            app()->setLocale('es');
            return view('es');
        }
        return view('en');
    }
}
