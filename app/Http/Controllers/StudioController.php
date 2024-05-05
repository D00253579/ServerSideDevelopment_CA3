<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disneyStudios;
class StudioController extends Controller
{
    public function index()
    {
        return view('studios.index')
            ->with('studios', disneyStudios::orderBy('studioName', 'DESC')->get());
    }
}
