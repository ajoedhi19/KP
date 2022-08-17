<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naker extends Model
{
    use HasFactory;

    protected $table = "nakers";
    protected $guarded = ["id"];
    protected $cast = [
        'status_naker' => 'boolean'
    ];
    public function direktorat()
    {
        return $this->belongsTo(Direktorat::class,'foreign_key');
    }
    public function witel()
    {
        return $this->belongsTo(Witel::class,'foreign_key');
    }
    public function mitra()
    {
        return $this->belongsTo(Mitra::class,'foreign_key');
    }
}
