<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //to do list
    public function getTodoList(){
        return view('todoList');
    }
}
