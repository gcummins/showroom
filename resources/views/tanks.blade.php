<!DOCTYPE HTML>
<html>
<head>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id="body">

<h1>Tanks</h1>
<hr>
@foreach($tanks as $tank)
<div @click="clickTank({{ $tank->id }})" class="tank-row">
    <img src="{{ $tank->thumbnail()->path }}">
    <div class="tank-description">
        <h3>
            {{ $tank->year . " " . $tank->make . " " . $tank->capacity }}
            @if($tank->status->name == "new")
                 - New!
            @endif
        </h3>
        <span>Capacity: {{ $tank->capacity }}</span>
        <p>{{ $tank->comments }}</p>
    </div>
</div>
<hr>
@endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.7/vue.js"></script>
<script>
    new Vue({
        el: '#body',
        methods: {
            clickTank:function(tank_id) {
                location.href="/tank/" + tank_id;
            }
        }
    })
</script>

</body>
</html>
