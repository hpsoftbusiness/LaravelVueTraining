@extends('layout')
@section('content')
<div id="app">
    <post-index :posts="{{json_encode($posts)}}"></post-index>
</div>
@endsection
