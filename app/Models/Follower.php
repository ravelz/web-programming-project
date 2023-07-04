<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    
    public $incrementing = false;
    protected $fillable = [
        'id_user_f',
        'id_user_m'
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
