<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class showcontroller extends Controller
{
    function show()
    {
        $data= detail::all();
        return view('show',['details'=>$data]);

    }
}
