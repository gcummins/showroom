@extends('layout')

@section('content')
	<h1>New Tank</h1>
	{!! Form::open(array('url'=>'tank'))!!}
	@include('tank.form')
	{!! Form::close() !!}

@stop
