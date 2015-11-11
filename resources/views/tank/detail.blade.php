<h1>{{ $tank->year . " " . $tank->make . " " . $tank->capacity }}</h1>
@foreach ($tank->photos as $photo)
    <img src="{{ $photo->path }}">
@endforeach
