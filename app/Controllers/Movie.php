<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Movie extends BaseController
{
    public function index()
    {
        return view('movie');
        
    }
}
