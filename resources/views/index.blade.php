@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a href="/posts/create" class="btn btn-success"> <h2>Add new post</h2></a>
            <a href="/posts/search" class="btn btn-warning"> <h2>Search for post (vue component)</h2></a>
        </nav>

        <h1>Latest posts</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="/posts/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $counter++;
                @endphp
            @endforeach
            </tbody>
        </table>


    </div>
@endsection
