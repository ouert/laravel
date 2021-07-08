<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class AppController extends Controller
{
    public function welcome()
    {
        
        return view('welcome', [
            
            'meals'=> Meal::paginate(9)
            
        ]);
    }
}
