<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthIdentifierEmail()
    {
        return 'email'; // ubah sesuai kolom yang digunakan sebagai username pada pengguna Anda
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['_id']; // ubah sesuai atribut yang menjadi identifier unik pada pengguna Anda
    }

    // public function getAuthIdentifierName()
    // {
    //     return $this->attributes['name']; // ubah sesuai kolom yang digunakan sebagai kata sandi pada pengguna Anda
    // }

    public function getAuthPassword()
    {
        return $this->attributes['password']; // ubah sesuai kolom yang digunakan sebagai kata sandi pada pengguna Anda
    }

    public function candidate()
    {
        return $this->hasOne(Candidate::class, 'user_id', '_id');
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
