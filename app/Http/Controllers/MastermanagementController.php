<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Inertia\Inertia;
class MastermanagementController extends Controller
{
    public function masterManagementindex(){
        return Inertia::render('mastermanagent/masterindex'); 
    }
}
