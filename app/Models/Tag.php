<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tag';
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'id_tag', 
        'title_tag'
    ];

    public $incrementing = false;

    public function detailTag(){
        return $this->belongsToMany(DetailTag::class, 'id_tag', 'id_tag');
    }
}
