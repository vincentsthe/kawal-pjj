@extends('main')

@section('content')
	<h1><i class="fa fa-list"></i> Kontestan</h1>
	<hr>
	@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	@endif
	<div class="panel panel-info">
		<div class="panel-heading">
			Daftar Kontestan
		</div>
		<table class="table">
			<tr>
				<th>id</th>
				<th>username</th>
				<th>Full Name</th>
				<th>LX ID</th>
				<th></th>
			</tr>
			@foreach ($contestants as $contestant)
				<tr>
					<td>{{ $contestant->id }}</td>
					<td>{{ $contestant->contestant_name }}</td>
					<td>{{ $contestant->fullname }}</td>
					<td>{{ $contestant->lx_id }}</td>
					<td><a href={{ url("contestant/remove/" . $contestant->id); }}><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
			@endforeach
		</table>
	</div>
@stop