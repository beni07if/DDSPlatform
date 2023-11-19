<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriplot extends Model
{
    use HasFactory;

    // Pada model Agriplot
    public function ttp()
    {
        return $this->belongsTo(Ttp::class, 'agriplot_estate_name_id', 'agriplot_estate_name_id');
    }

    // Assuming you have a column named 'deforestation_risk' in the 'agriplots' table
    public function scopeWithRiskCount($query)
    {
        return $query->select('agriplot_deforestation_risk', DB::raw('COUNT(*) as count'))
                    ->groupBy('agriplot_deforestation_risk');
    }

}
