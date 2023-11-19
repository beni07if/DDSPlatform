<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ttp extends Model
{
    use HasFactory;

    public function agriplots()
    {
        return $this->hasMany(Agriplot::class, 'agriplot_estate_name_id', 'agriplot_estate_name_id');
    }

    // Pada model Ttp
    // public function agriplots()
    // {
    //     return $this->hasMany(Agriplot::class, 'eq_ttp_id', 'eq_ttp_id');
    // }

    public function mills()
    {
        return $this->belongsTo(Mill::class, 'mill_eq_id', 'mill_eq_id');
    }

}
