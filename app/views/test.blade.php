@extends('main')

@section('content')
	@foreach ($contestants as $contestant)
		{{ $contestant->fullname }}
	@endforeach
@stop