@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit post</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="mt-4">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="form-group mt-4">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
@endsection
