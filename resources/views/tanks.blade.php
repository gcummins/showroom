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
<section @click="clickTank({{ $tank->id }})">
    <img src="{{ $tank->thumbnail()->path }}">
    <span>Status: {{ $tank->status->name }}</p>
    <p>Description: {{ $tank->year . " " . $tank->make . " " . $tank->capacity }}</p>
</section>
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
