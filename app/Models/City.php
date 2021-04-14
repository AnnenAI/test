<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Station;

class City extends Model
{
    use HasFactory;

    public function stations(){
        $this->hasMany(Station::class);
    }
}
