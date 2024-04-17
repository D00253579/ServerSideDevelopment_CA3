<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisneyStudios extends Model
{
    protected $fillable = [
    'studioName',
    'founded',
    'president',
    'location',
    ];
}
