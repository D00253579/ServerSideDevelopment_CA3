<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disneyCharacters;

class characterController extends Controller
{
    public function index()
    {
        return view('characters.index')
            ->with('characters', disneyCharacters::orderBy('characterName', 'ASC')->get());
    }
}
