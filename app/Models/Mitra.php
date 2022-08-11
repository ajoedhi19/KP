<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = "mitras";
    protected $guarded = ["id"];
    protected $attributes = [
        "Jumlah_Minimal_Naker" => 0
    ];  
    
    public function mitra()
    {
        return $this->hasMany(Mitra::class);
    }
}