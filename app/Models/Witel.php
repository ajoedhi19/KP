<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witel extends Model
{
    use HasFactory;

    public function witel()
    {
        return $this->hasMany(Witel::class);
    }
}