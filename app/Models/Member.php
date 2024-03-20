<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'loginID',
        'loginPass', 
        'memberID', 
    ];

    protected $table = 'member';
}
