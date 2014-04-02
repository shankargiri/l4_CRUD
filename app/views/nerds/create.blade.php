@extends('layouts.master')

@section('create_content')

	<h1>Create Nerd</h1>

	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'nerds')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('nerd_level', 'Nerd Level') }}
			{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sydney University', '2' => 'Latrobe University', '3' => 'Swinebun University'), Input::old('nerd_level'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Submit!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop