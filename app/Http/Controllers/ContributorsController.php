<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributorsController extends Controller
{
    public function base(){
        return view('contributors.base');
    }
}
