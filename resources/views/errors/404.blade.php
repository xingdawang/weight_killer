@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container text-center">
		<img class="center-block" src="{{ URL::asset('img/404.png') }}"/><br>
		<p class="lead">Whoops, looks like something went wrong</p>
	</div>
</div>
@endsection