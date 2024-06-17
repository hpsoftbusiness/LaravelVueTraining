@extends('layouts.app')
@section('content')
    <div class="container">
        <x-form action="{{ route('example.submit') }}" method="POST" class="my-custom-class">
            <h1>Add new post</h1>
            <div class="form-group">
                <label for="name">title:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">body:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </x-form>
    </div>
@endsection
