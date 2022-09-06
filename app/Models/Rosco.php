<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rosco extends Model
{
    use HasFactory;

    protected $fillable = [
      'opciones',
    ];

    protected $casts = [
      'opciones' => 'json',
    ];

    public static $abcdario = [
      'a',
      'b',
      'c',
      'd',
      'e',
      'f',
      'g',
      'h',
      'i',
      'j',
      'l',
      'm',
      'n',
      'ñ',
      'o',
      'p',
      'q',
      'r',
      's',
      't',
      'u',
      'v',
      'x',
      'y',
      'z',
    ];

    public function palabras()
    {
        return $this
            ->belongsToMany(Palabra::class)
            ->withPivot('letra')
            ->orderBy('palabra_rosco.letra');
    }
}