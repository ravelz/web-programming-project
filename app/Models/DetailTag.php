<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTag extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tag';
    protected $fillable = [
        'id_article', 
        'id_tag',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function article(){
        return $this->belongsToMany(Article::class, 'id_article', 'id_article');
    }
}
