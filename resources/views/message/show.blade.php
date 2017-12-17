@extends('layout')
@section('contenido')
<div class="row">
	<div class="col-12">
		<p>Message by: <strong>{{ $message->name }}</strong> <small>({{ $message->email }})</small> - Category: {{ $message->category->name }}</p>
		<i>{{ $message->message }}</i>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<a href="{{ url()->previous() }}" class="btn btn-info">Regresar</a>
	</div>
</div>
@endsection