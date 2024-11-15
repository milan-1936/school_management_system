<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $information = Information::latest()->get();
        return view('welcome', compact('information'));
    }
}
