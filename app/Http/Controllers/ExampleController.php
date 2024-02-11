<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ExampleController extends Controller
{
    public function one() {       

        return Inertia::render(
            'Example/one'
        );
    }

    public function one_two() {       

        return Inertia::render(
            'Example/one_two'
        );
    }    

    public function two() {       

        return Inertia::render(
            'Example/two'
        );
    }

    public function three() {       

        return Inertia::render(
            'Example/three'
        );
    }     
    
    public function four() {       

        return Inertia::render(
            'Example/four'
        );
    }
    
    public function five() {       

        return Inertia::render(
            'Example/five'
        );
    }   
    
    public function six() {       

        return Inertia::render(
            'Example/six'
        );
    } 
    
    public function seven() {       

        return Inertia::render(
            'Example/seven'
        );
    }     
}
