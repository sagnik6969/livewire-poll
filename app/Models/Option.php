<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function poll(){
        return $this->belongsTo(Poll::class);
    }

    public function Votes(){
        return $this->hasMany(Vote::class);
    }
}
