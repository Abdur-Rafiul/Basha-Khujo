<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basha_details extends Model
{
    use HasFactory;

    public function basha_list()
    {
        return $this->belongsTo(basha_list::class);
    }
}
