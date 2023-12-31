<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


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
        'email_token',
        'email_verified_at'
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
        'password' => 'hashed',
    ];

    protected $rules = [
        'name' => 'required|unique:users',
        'email' => 'required|unique:users|max:255',
        'password' => 'required',
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($user) {
            $user->createProfile();
        });
    }

    public function createProfile()
    {
        $profile = new Profile();
        $profile->id_user = $this->id;
        $profile->image = 'no-image.jpg';
    
        $this->profile()->save($profile);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class, 'id_user');
    }

}
