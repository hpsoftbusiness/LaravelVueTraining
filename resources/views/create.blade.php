@extends('layouts.app')
@section('content')
    <div class="container">
        <x-form action="{{ route('posts.store') }}" method="POST" class="my-custom-class">
            <h1>Add post</h1>
            <div class="form-group">
                <label for="name">title:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">body:</label>
                <input type="text" id="body" name="body" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create post</button>
        </x-form>
    </div>
@endsection
