<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_article';
    public $incrementing = false;

    protected $fillable = [
        'id_article', 
        'judul', 
        'tgl_publish', 
        'jml_comment', 
        'id_user',
        'status_member', 
        'deskripsi',
        'jml_like'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
