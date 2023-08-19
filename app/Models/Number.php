<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $fillable=[

        'number',
    
    ];
    public function numbers()
    {
        return $this->belongsToMany(Agent::class);
    }
}
