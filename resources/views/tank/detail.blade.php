@extends('layout')

@section('content')
    <h1>{{ $tank->year . " " . $tank->make . " " . $tank->capacity }}</h1>
    @foreach ($tank->photos as $photo)
        <img src="{{ $photo->path }}">
    @endforeach

    <form action="/tank/{{ $tank->id }}/photos" method="POST" class="dropzone">
        {{ csrf_field() }}
    </form>
@stop

@section('scripts.footer')
    <script src="/js/dropzone.js"></script>
@stop
