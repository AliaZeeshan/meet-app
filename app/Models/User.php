<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enum\UserRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => UserRoles::class,
    ];

// create Accesor and mutator
    public function getNameAttribute()
    {
        return strtoupper($this->attributes['name']);
    }

    public function setNamAttribute()
    {
        $this->attribute['name'] = strtolower($this->attributes['name']);
    }

    public function name(): Attribute
    {
        return new Attribute(
            get: fn($value) => strtoupper($value),
            set: fn($value) => strtolower($value),
        );
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
