<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey='id_user';
    public $incrementing=false; 
    protected $fillable = [
        'id_user',
        'name',
        'username',
        'aboutme',
        'role',
        'profile_picture',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    // public function followers(){
    //     return $this->belongsToMany(User::class, 'followers',
    //     'id_user_m',
    //     'id_user_f');
    // }

    public function articles(){
        return $this->belongsToMany(Article::class,
        'articles',
        'id_user',
        'id_user'
    );
    }

    public function likes(){
        return $this->belongsToMany(Like::class, 'id_user', 'id_user');
    }

    public function comment(){
        return $this->belongsToMany(Comment::class, 'id_user', 'id_user');
    }

    // public function article(){
    //     return $this->hasMany(Article::class, 'id_user', 'id_user');
    // }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // users that are followed by this user
    public function following() {
        // dd($this->belongsToMany(User::class, 'followers',
        // 'id_user_m',  // M mengikuti F
        // 'id_user_f')->get());
        return $this->belongsToMany(User::class, 'followers',
        'id_user_m',  // M mengikuti F
        'id_user_f');
    }

    // users that follow this user
    public function followers() {
        return $this->belongsToMany(User::class, 'followers',
        'id_user_f',
        'id_user_m');
    }

    public function isFollowing($user)
    {
        // dd($user);
        return  !!  $this->following()->where('id_user_f', $user)->count();
    }

    public function isFollowedBy($user)
    {
        return  !! $this->followers()->where('id_user_m', $user)->count();
    }

    public function draftArticle(){
        return $this->belongsToMany(Draft::class, 'id_user', 'id_user');
    }    
}
