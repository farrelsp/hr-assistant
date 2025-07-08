<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Employee extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'employees'; 
    protected $guarded = [];
    // public $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'address',
        'date_of_birth',
        'no_hp',
        'position'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }
}
