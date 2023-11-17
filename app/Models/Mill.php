<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mill extends Model
{
    use HasFactory;
    protected $table = 'mills';
    // protected $fillable = ['question', 'answer'];
    protected $fillable = [
        'mill_eq_id' 
    ];

    public function estates()
    {
        return $this->hasMany(Ttp::class, 'mill_eq_id', 'mill_eq_id');
    }
}
