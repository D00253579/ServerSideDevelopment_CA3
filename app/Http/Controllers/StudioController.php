<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\disneyStudios;
use App\Models\disneyCharacters;
use Illuminate\Support\Str;

class StudioController extends Controller
{
    public function index()
    {
        return view('studios.index')
            ->with('studios', disneyStudios::orderBy('studioName', 'DESC')->get());
    }

    
    /**
     *  Preparing studio data for validation - data sanitisation 
     */
    public function prepareForValidation(){
        $this->merge(
            [
                'studioName' =>Str::studioName($this->studioName),
                'founded' => date_format::founded($this->founded),
                'president' => Str::president($this->president),
                'location' => Str::location($this->location),            
                ]
            );
    }

    public function edit($studioName){
        return view('studios.edit')
        ->with ('studio',disneyStudios::where('studioName',$studioName)->first());
    }
    public function update(Request $request, $studioName)
    {
        $request->validate([
            'studioName' => 'required',
            'founded' => 'required',
            'president' => 'required',
            'location' => 'required'
        ]);

        disneyStudios::where('studioName', $studioName)
            ->update([
                'studioName' => $request->input('studioName'),
                'founded' => $request->input('founded'),
                'president' => $request->input('president'),
                'location' => $request->input('location')
                
            ]);
            
            return redirect('/studios');
    }
    public function destroy($studioName){
        
            $studioName=disneyStudios::where('studioName',$studioName);
            $studioName->delete();
            return redirect('/studios');
    }
}
