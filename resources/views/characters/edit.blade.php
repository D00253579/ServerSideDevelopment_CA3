@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Character
        </h1>
    </div>
</div>
<form action="/characters/{{ $character->characterName }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <textarea class='EditFields' name='characterName'>{{ $character->characterName }}</textarea>
    <textarea class='EditFields' name='characterType'>{{ $character->characterType }}</textarea>
    <textarea class='EditFields' name="movieName" >{{ $character->movieName }}</textarea>
    <textarea class='EditFields' name="characterQuote" >{{ $character->characterQuote }}</textarea>
    <button type="submit">Submit</button>

</form>
@endsection 