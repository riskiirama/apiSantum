<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Coba;

class CobaController extends Controller
{
    public function index()
    {
        $data = Coba::all();
        return response()->json($data);
    }
   
}
