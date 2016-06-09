@extends('app')

@section('content')

	<div class="container">
		<h3>Categorias</h3>
		<br>
		<a href="#" class="btn btn-default">Nova categoria</a>
		<br><br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Ação</th>
				</tr>
			</thead>

			<tbody>

			@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td></td>
				</tr>
			@endforeach

			</tbody>
		</table>


	</div>

@endsection