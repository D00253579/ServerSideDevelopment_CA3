@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto flex justify-center">
    <div class="py-15">
        <h1 class="text-6xl">
            <img src="/Images/updateStudioTitle.png" alt="Update Title Image" height="150" width="250">
        </h1>
    </div>
</div>
<div class=" flex justify-center">
<form action="/studios/{{ $studio->studioName }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="inline-block">
    <br>
    <h2 class="createLabels">Studio Name:</h2>
    <br>
    <textarea class='createField' name='studioName'>{{ $studio->studioName }}</textarea>
    @error('studioName')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <h2 class="createLabels">Date it was founded:</h2>
    <br>
    <input type="date" class='createField' name="founded" value={{ $studio->founded }}>            
    @error('founded')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <h2 class="createLabels">Current President:</h2>
    <br>
    <textarea class='createField' name="president" >{{ $studio->president }}</textarea>
    @error('president')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <h2 class="createLabels">Location:</h2>
    <br>
    <textarea class='createField' name="location" >{{ $studio->location }}</textarea>
    @error('location')
    <div class="alert-alert danger text-red text-center italic">{{ $message }}*</div>
    @enderror
    <br>
    <br>
    <div class="flex justify-center mb-20">
        <button type="submit" class="addButton">Submit</button>
        </div>
            </div>

</form>
</div>
@endsection 