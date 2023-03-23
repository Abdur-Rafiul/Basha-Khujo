<?php

namespace App\Models;

use Devfaysal\BangladeshGeocode\Models\Division;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basha_list extends Model
{
    use HasFactory;
    public $table="basha_list";

    public function basha_details()
    {
        return $this->belongsTo(basha_details::class);
    }

}
