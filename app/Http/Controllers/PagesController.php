<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welome to ToDoList!';
    	return view('pages.index')->with('title', $title);
    }
}
