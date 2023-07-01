<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $primaryKey = ['id_article', 'id_user'];
    public $incrementing = false;
    protected $fillable = [
        'id_article',
        'id_user', 
        'created_at', 
        'updated_at'
    ];

    public function article(){
        return $this->belongsToMany(Articles::class, 'id_article', 'id_article');
    }
}
