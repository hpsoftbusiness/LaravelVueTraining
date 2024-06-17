@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Post listing</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>  {{ $user->title }}</td>
                    <td>  {{ $user->body }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
@endsection
