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
    public function edit($characterName){
        return view('characters.edit')
        ->with ('character',disneyCharacters::where('characterName',$characterName)->first());
    }
    public function update(Request $request, $characterName)
    {
        $request->validate([
            'characterName' => 'required',
            'characterType' => 'required',
            'movieName' => 'required',
            'characterQuote' => 'required'
        ]);

        disneyCharacters::where('characterName', $characterName)
            ->update([
                'characterName' => $request->input('characterName'),
                'characterType' => $request->input('characterType'),
                'movieName' => $request->input('movieName'),
                'characterQuote' => $request->input('characterQuote')
                
            ]);
            
            return redirect('/characters');
    }
    public function destroy($characterName){
        $characterName=disneyCharacters::where('characterName',$characterName);
        $characterName->delete();
        return redirect('/characters');
    }
}
