<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.list');
    }    
}
