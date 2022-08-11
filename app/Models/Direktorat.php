<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    use HasFactory;

    protected $table = "direktorats";

    protected $fillable = "Nama_Direktorat";

    public function direktorat()
    {
        return $this->hasMany(Naker::class);
    }
}