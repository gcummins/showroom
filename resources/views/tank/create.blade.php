@extends('layout')

@section('content')
	<!-- Wide card with share menu button -->
	<style>
		.create-card-wide.mdl-card {
		margin: auto;
		width: 512px;
		}
		.create-card-wide > .mdl-card__title {
		color: #fff;
		height: 100px;
		background-color: indigo;
		}
		.create-card-wide > .mdl-card__menu {
		color: #fff;
		}
	</style>

	<div class="create-card-wide mdl-card mdl-shadow--2dp">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">New Tank</h2>
		</div>
		{!! Form::open(array('url'=>'tank'))!!}
		<div class="mdl-card__supporting-text">
			@include('tank.form')
		</div>
		<div class="mdl-card__actions mdl-card--border">
			{!! Form::submit('Create Tank', array(
			    'class' => "mdl-button mdl-button--colored mdl-js-button mdl-button--raised"
			)) !!}
		</div>
		{!! Form::close() !!}

	</div>

@stop
