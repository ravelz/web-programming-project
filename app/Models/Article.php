<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
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
  
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    
    protected $primaryKey = 'id_article';

}
