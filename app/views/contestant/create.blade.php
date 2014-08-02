@extends('main')

@section('content')
	<h1><i class="fa fa-plus"></i> Tambah Kontestan</h1>
	<hr>
	
	@if(Session::has('errors'))
		<div class="alert alert-danger">
			{{ $errors->first() }}
		</div>
	@endif
	
	{{ Form::model($contestant, array('url' => 'contestant/create', 'class'=>'form-horizontal')) }}
		<div class="form-group">
			<label for="username" class="col-md-3 control-label">Username</label>
			<div class="col-md-5">
				{{ Form::text('contestant_name', null, array('class'=>'form-control', 'id'=>'username')) }}
			</div>
		</div>
		<div class="form-group">
			<label for="fullname" class="col-md-3 control-label">Full Name</label>
			<div class="col-md-5">
				{{ Form::text('fullname', null, array('class'=>'form-control', 'id'=>'fullname')) }}
			</div>
		</div>
		<div class="form-group">
			<label for="lx-id" class="col-md-3 control-label">LX - Id</label>
			<div class="col-md-5">
				{{ Form::text('lx_id', null, array('class'=>'form-control', 'id'=>'lx-id')) }}
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-9 col-md-offset-3">
				{{ Form::submit('Submit', array('class'=>'btn btn-warning')) }}
			</div>
		</div>
	{{ Form::close() }}
@stop