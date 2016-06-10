@extends('app')

@section('content')

	<div class="container">
		<h3>Nova categoria</h3>

	{!! Form::open(['route'=>'admin.categories.store', 
	'class'=>'form']) !!}

	
	<!-- Name Form Input -->
	<div class="form-group">
		{!! Form::label('Name', 'Nome:') !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Criar categoria', ['class'=>'btn btn-primary']) !!}
	</div>


	{!! Form::close() !!}


	</div>

@endsection