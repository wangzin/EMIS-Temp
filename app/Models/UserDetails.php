<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 't_user_details';
    protected $fillable = [
        'Full_Name', 'Email', 'Contact','Role',
    ];
}
