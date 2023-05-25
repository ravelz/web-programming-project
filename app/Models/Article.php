<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_artcile',
        'judul',
        'tgl_publish',
        'status_member',
        'deskripsi',
        'jml_like',
        'jml_comment',
        'id_user'
    ];
    
    protected $primaryKey = 'id_article';
}
