<?php

namespace App\Http\Controllers\siteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    
    {
        return view('site.home.index');

    }
}
