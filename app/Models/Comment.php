<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_comment';
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
      'id_comment',
      'id_article', 
      'id_user', 
      'comment', 
      'created_at', 
      'updated_at'
    ];

    public function article(){
        return $this->belongsToMany(Article::class, 'id_article', 'id_article');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
   
}
