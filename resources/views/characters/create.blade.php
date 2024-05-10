@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            <img src="Images/addTitle.png" alt="Update Title Image" height="50" width="80">
        </h1>
    </div>
</div>
<form action="/characters/{{ $character->characterName }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <textarea class='CreateFields' name='characterName'>{{ $character->characterName }}</textarea>
    <textarea class='CreateFields' name='characterType'>{{ $character->characterType }}</textarea>
    <textarea class='CreateFields' name="movieName" >{{ $character->movieName }}</textarea>
    <textarea class='CreateFields' name="characterQuote" >{{ $character->characterQuote }}</textarea>
    <button type="submit">Add</button>

</form>
@endsection 