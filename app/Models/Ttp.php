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

}
