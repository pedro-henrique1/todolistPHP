<?php

namespace App\Http\Controllers;

use App\Models\TodoList;

class HomeController extends Controller
{
    public function test()
    {
        $list = TodoList::all();
        return view('home', compact('list'));
    }
}
