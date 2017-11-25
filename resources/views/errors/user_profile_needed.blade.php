@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-3">Dear {{ Auth::user()->name }} </h1>
		<p class="lead ">We need more information to help you calculate health condition, you can simply add them at <a href={{ route('user_update') }}>profile</a> page</p>
	</div>
</div>
@endsection
