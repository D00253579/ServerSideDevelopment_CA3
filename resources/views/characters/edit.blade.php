@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto flex justify-center">
    <div class="py-15">
        <h1 class="text-6xl">
            <img src="/Images/updateTitle.png" alt="Update Title Image" height="150" width="250">
        </h1>
    </div>
</div>
<div class=" flex justify-center">
<form action="/characters/{{ $character->characterName }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="inline-block">
        <br>
    <h2 class="createLabels">Character Name:</h2>
    <br>
    <textarea class='createField' name='characterName'>{{ $character->characterName }}</textarea>
    <br>
    <br>
    <h2 class="createLabels">Character Type: </h2>
    <br>
    <textarea class='createField' name='characterType'>{{ $character->characterType }}</textarea>
    <br>
    <br>
    <h2 class="createLabels">Movie Name: </h2>
    <br>
    <textarea class='createField' name="movieName" >{{ $character->movieName }}</textarea>
    <br>
    <br>
    <h2 class="createLabels">Character Quote: </h2>
    <br>
    <textarea class='createField' name="characterQuote" >{{ $character->characterQuote }}</textarea>
    <br>
    <br>
    <div class="flex justify-center mb-20">
        <button type="submit" class="addButton">Submit</button>
        </div>
            </div>
</form>
</div>
@endsection 