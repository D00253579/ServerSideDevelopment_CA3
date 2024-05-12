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
<form action="/auth/{{ $user->name }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="inline-block">
        <br>
    <h2 class="createLabels">Name:</h2>
    <br>
    <textarea class='createField' name='characterName'>{{ $user->name }}</textarea>
    @error('characterName')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <h2 class="createLabels">Email: </h2>
    <br>
    <textarea class='createField' name='characterType'>{{ $user->email }}</textarea>
    @error('characterType')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <h2 class="createLabels">Password: </h2>
    <br>
    <textarea class='createField' name="movieName" >{{ $user->password }}</textarea>
    @error('movieName')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <div class="flex justify-center mb-20">
        <button type="submit" class="addButton">Submit</button>
        </div>
            </div>
</form>
</div>
@endsection 