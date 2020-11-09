<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgModel extends Model
{
    use HasFactory;
    public $timestamps = true; 
    protected $table = 't_org_details';
    protected $fillable = [
        'org_name','village','Email','Contact'
       
    ];
    
}
