<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    use HasFactory;
    //rel 1:m inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
