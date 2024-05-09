<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disneyCharacters extends Model
{
    protected $fillable = [
        'characterName',
        'characterType',
        'movieName',
        'characterQuote',
        'image_path',
        'studio_id'
        ];
}
