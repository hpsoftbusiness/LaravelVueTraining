@extends('layout')
@section('content')
<div id="app">
    <post-edit :edit="{{json_encode($edit)}}"></post-edit>
</div>
@endsection
