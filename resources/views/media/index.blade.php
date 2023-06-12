@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Media</h1>
    @if (count($media) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Media</th>
                <th>Created</th>
                <th>Updated</th>
                <th>by</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($media as $medium)
            <tr>
                <td><img src="/photos/{{ $medium->name }}" alt="{{ $medium->name }}" width="100"></td>
                <td>{{ $medium->created_at }}</td>
                <td>{{ $medium->updated_at }}</td>
                <td>{{ $medium->user->name }}</td>
                <td>
                    <a href="/media/{{ $medium->id }}" class="btn btn-primary">Preview</a>
                </td>
                <td>
                    @if(Auth::user())
                    @if(Auth::user()->id == $medium->user_id)
                    <form action="/media/{{ $medium->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    {{ $media->links() }}
</div>
@endsection