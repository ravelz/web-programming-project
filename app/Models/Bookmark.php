<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'id_user',
        'id_article'
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
