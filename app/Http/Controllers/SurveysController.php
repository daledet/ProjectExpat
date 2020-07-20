<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveysController extends Controller
{
    public function survey(){
        return view('surveys.survey');
    }
    public function personal(){
        return view('surveys.personal');
    }
    public function family(){
        return view('surveys.family');
    }
    public function employment(){
        return view('surveys.employment');
    }

}
