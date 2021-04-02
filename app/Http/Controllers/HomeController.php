<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$boxes = Box::all();
    	$items = Item::orderBy('id', 'desc')->limit(6)->get();

    	return view('home', [
    		'boxes' => $boxes,
    		'items' => $items
    	]);
    }
}
