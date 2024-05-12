<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disneyCharacters;
use Illuminate\Support\Str;

class characterController extends Controller
{
    public function index()
    {
        return view('characters.index')
            ->with('characters', disneyCharacters::orderBy('characterName', 'ASC')->get());
    }

    public function create(){
        return view('characters.create');
    }

    /**
     *  Preparing character data for validation - data sanitisation 
     */
    public function prepareForValidation(){
        $this->merge(
            [
                'characterName' =>Str::characterName($this->characterName),
                'characterType' => Str::characterType($this->characterType),
                'movieName' => Str::movieName($this->movieName),
                'characterQuote' => Str::characterQuote($this->characterQuote),            
                ]
            );
    }

    /**
     *   Store the new disney characters 
    */
    public function store(Request $request){
    $request->validate([
        'characterName' => 'required',
        'characterType' => 'required',
        'movieName' => 'required',
        'characterQuote' => 'required',
        'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
    ]);

    $newCharacterImage = uniqid() . '-' . $request->characterName . '.' . $request->image_path->extension();

    $request->image_path->move(public_path('Images'), $newCharacterImage);

    /**
     *  To fix issue with the foreign key:
     *  we are checking what studio the character is from based on the user drop down list,
     *  setting the selectedStudioId equal to the corresponding ID from 1-5
     */

    $userOption = $request->input('studio');
    $selectedStudioId; 
    if($userOption == "waltDisney"){
        $selectedStudioId = 1;
    }

    if($userOption == "pixar"){
        $selectedStudioId = 2;
    }

    if($userOption == "marvel"){
        $selectedStudioId = 3;
    }

    if($userOption == "20thCentury"){
        $selectedStudioId = 4;
    }

    if($userOption == "lucasFilms"){
        $selectedStudioId = 5;
    }

    disneyCharacters::create([
    'characterName' => $request->input('characterName'),
    'characterType' => $request->input('characterType'),
    'movieName' => $request->input('movieName'),
    'characterQuote' => $request->input('characterQuote'),
    'studio_id' => $selectedStudioId,
    'image_path'=> $newCharacterImage
    ]);

    return redirect(('/characters'))
            ->with('message', 'Yay your character has been created!');
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
