@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
@endsection
@section('content')
    <div class="container">
        <h1>Create Media</h1>
        <form action="/media" method="POST" class="dropzone" id="my-awesome-dropzone">
            @csrf
        </form>
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
@endsection    