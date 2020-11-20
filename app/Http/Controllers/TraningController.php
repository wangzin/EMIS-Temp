<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Inertia\Inertia;
class TraningController extends Controller{
    public function trainingindex(){
        return Inertia::render('training/trainingIndex'); 
    }
}
