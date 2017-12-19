@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container text-center">
		<img class="center-block" src="{{ URL::asset('img/404.png') }}"/><br>
		<p class="lead">@lang('404.error')</p>
	</div>
</div>
@endsection