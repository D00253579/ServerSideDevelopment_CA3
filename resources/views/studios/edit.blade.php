@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>
<form action="/studios/{{ $studio->studioName }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <textarea class='EditFields' name='studioName'>{{ $studio->studioName }}</textarea>
    <input type="date" name="founded" value={{ $studio->founded }}>            
    <textarea class='EditFields' name="president" >{{ $studio->president }}</textarea>
    <textarea class='EditFields' name="location" >{{ $studio->location }}</textarea>
    <button type="submit">Submit</button>

</form>
@endsection 