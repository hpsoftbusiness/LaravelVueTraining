@extends('layouts.app')
@section('content')
    <div class="container">
        <x-form action="{{ route('posts.save')}}" method="POST" class="my-custom-class">
            <h1>Edit post</h1>
            <div class="form-group">
                <label for="name">title:</label>
                <input type="text" id="title" value="{{$post->title}}" name="title" class="form-control">
                <input type="hidden" id="id" value="{{$post->id}}" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">body:</label>
                <input type="text" value="{{$post->body}}" id="body" name="body" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Edit post</button>
        </x-form>
    </div>
@endsection
