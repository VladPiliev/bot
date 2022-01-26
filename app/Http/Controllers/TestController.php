<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function FunctionName()
    {
        return response()->json("Vse ok!");
    }
}
