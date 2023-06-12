@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">Posts</h5>
            <a href="/posts/create" class="btn btn-primary">Add Post</a>
            @if (count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card card-body bg-light mt-4">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>Written on {{ $post->created_at }}</small>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">Media</h5>
            <a href="/media/create" class="btn btn-primary">Add Media</a>
            @if (count($media) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Media</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($media as $medium)
                    <tr>
                        <td><img src="/photos/{{ $medium->name }}" alt="{{ $medium->name }}" width="100"></td>
                        <td>{{ $medium->created_at }}</td>
                        <td>{{ $medium->updated_at }}</td>
                        <td>
                            <a href="/media/{{ $medium->id }}" class="btn btn-primary">Preview</a>
                        </td>
                        <td>
                            <form action="/media/{{ $medium->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection