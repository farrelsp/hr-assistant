<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Candidate extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'candidates';
    protected $guarded = [];
    // public $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'address',
        'date_of_birth',
        'no_hp',
        'position',
        'cv',
        'status',
        'tell_me_yourself',
        'test_score_a',
        'test_score_c',
        'test_score_e',
        'test_score_n',
        'test_score_o',
        'test_result_a',
        'test_result_c',
        'test_result_e',
        'test_result_n',
        'test_result_o',
        'personality'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }
}
