<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __invoke()
    {
        return view('admin.index');
    }
}
