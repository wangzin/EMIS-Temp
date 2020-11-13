<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function getusers(){
        $data = UserDetails::all();  
        return Inertia::render('usermanagement/Usermanagement', ['data' => $data]); 
    }
    public function newogranozation(){
        return Inertia::render('org/neworgform'); 
    }
    public function saveuser(Request $request)
    {
        Validator::make($request->all(), [
            'Full_Name' => ['required'],
            'Email' => ['required'],
            'Contact' => ['required'],
            'Role' => ['required'],
        ])->validate();
        
        $fullNme=$request->input('fullname1');
        die('name: '. $fullNme);
        UserDetails::create($request->all());
    
        return redirect()->back()
                    ->with('message', 'User Created Successfully.');
    } 
    public function getdzongkhaglist(){
        $dzo = DB::table('master_dzongkhag')
               ->select('Dzongkhag_Id', 'Dzongkhag_Name')
               ->orderBy('Dzongkhag_Id')
               ->get();
        return $dzo;
    }
    public function gewoglist($id){
        $select = DB::table('master_gewog')
            ->select('Gewog_Id','Gewog_Name')
            ->orderBy('Gewog_Id')
            ->where('Dzongkhag_Id', '=', $id)
            ->get();
        return $select;
    }
    public function getvillagelist($id){
        $select = DB::table('master_village')
            ->select('Village_Serial_No','Village_Name')
            ->orderBy('Village_Serial_No')
            ->where('Gewog_Serial_No', '=', $id)
            ->get();
        return $select;
    }
}
