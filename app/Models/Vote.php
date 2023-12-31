<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function options()
    {
        return $this->belongsTo(Option::class);
        // if the class is in the same folder / same namespace we don't need to import it 

    }
}
