@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Preview Media</h1>
        <h3>by {{ $media->user->name }}</h3>
        <br>
        <img src="/photos/{{ $media->name }}" alt="{{ $media->name }}" class="img-thumbnail w-50">
        <br><br>
        <a href="/media" class="btn btn-primary">Back</a>

        
    </div>
@endsection
