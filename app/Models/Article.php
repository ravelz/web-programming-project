<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'id_article';
    protected $fillable = [
        'id_article',
        'judul',
        'tgl_publish',
        'membership',
        'deskripsi',
        'jml_like',
        'jml_comment',
        'id_user',
        'thumbnail'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
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

    public function tag(){
        return $this->hasMany(DetailTag::class, 'id_article', 'id_article');
    }
}
