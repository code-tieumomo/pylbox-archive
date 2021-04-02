<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$boxes = Box::all();

    	return view('home', [
    		'boxes' => $boxes,
    	]);
    }
}
