<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_article';
    protected $fillable = [
        'id_article',
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

    public function like(){
        return $this->belongsToMany(Likes::class, 'id_article', 'id_article');
    }

    public function comment(){
        return $this->belongsToMany(Comment::class, 'id_article', 'id_article');
    }
}
