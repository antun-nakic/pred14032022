<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        return "show bla bla bla $id";
    }

    public function store()
    {
        return "store bla bla bla";
    }
}
