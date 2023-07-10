<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;
    protected $table = 'drafts';
    protected $primaryKey = 'id_draft';
    protected $fillable = [
        'id_draft',
        'id_user',
        'judul',
        'thumbnail',
        'deskripsi',
        'tag',
        'tgl_draft'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function owner(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
