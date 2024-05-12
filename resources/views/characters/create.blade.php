@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto">
    <div class="mt-16 flex justify-center">
        <h1 class="text-6xl">
            <img src="/Images/addTitle.png" alt="Update Title Image" height="300" width="250" class="flex justify-center">
        </h1>
    </div>
</div>
<div class=" flex justify-center">
<form action="/characters" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="inline-block">
        <br>
    <h2 class="createLabels">Character Name:</h2>
    <br>
<input type="text" name="characterName" placeholder="Enter Character Name" class="createField">
<br>
<br>
<h2 class="createLabels">Character Type: </h2>
<br>
<input type="text" name="characterType" placeholder="Enter Character Type" class="createField">
<br>
<br>
<h2 class="createLabels">Movie Name: </h2>
<br>
<input type="text" name="movieName" placeholder="Enter Movie Name" class="createField">
<br>
<br>
<h2 class="createLabels">Character Quote: </h2>
<br>
<input type="text" name="characterQuote" placeholder="Enter Character Quote" class="createField">
<br>
<br>
<h2 class="createLabels mt-8">Upload a Character Image:</h2>
<br>
<input type="file" name="image_path" class="addImageField">
<br>
<br>
<div class="flex justify-center inline-block mt-4">
<label for="selectStudio" class="text-darkBlue font-serif">Select a Studio:</label>
<br>
<br>
<select name="studio" class="mt-4" id="studio">
<option value="waltDisney">Walt Disney</option>
<option value="pixar">Pixar</option>
<option value="marvel">Marvel</option>
<option value="20thCentury">20th Century</option>
<option value="lucasFilms">Lucasfilms</option>
</select>
<br>
<br>
</div>
<br>
<div class="flex justify-center mb-20">
<button type="submit" class="addButton">Submit</button>
</div>
    </div>
</form>
@endsection 