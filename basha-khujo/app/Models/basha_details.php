<?php

namespace App\Models;

use Devfaysal\BangladeshGeocode\Models\District;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basha_details extends Model
{
    use HasFactory;

    public function basha_list()
    {
        return $this->belongsTo(basha_list::class);
    }

    public function districts()
    {
        return $this->belongsTo(District::class);
    }

}
