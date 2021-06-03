<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function user()
    {
        // Define the relationship to companies (many-to-one)
        return $this->belongsTo('\App\Models\User');
    }
}
