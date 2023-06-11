<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;


    public function getDateTimeAttribute()
    {
        $date = \Carbon\Carbon::createFromTimestamp($this->date)->format('d/m/y');
        return $date;
    }
}