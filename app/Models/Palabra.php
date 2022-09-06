<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    use HasFactory;

    protected $fillable = [
      'inicial',
      'palabra',
      'definicion',
      'estado',
      'drae_id',
    ];

    public function roscos()
    {
        return $this->belongsToMany(Rosco::class);
    }
}