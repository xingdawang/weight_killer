@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-3">Dear {{ Auth::user()->name }} </h1>
		<p class="lead ">Before calculating your Body Fat Percentage (BFP), we need hear <a href={{ route('user_view_weight') }}>more</a> from you!</p>
	</div>
</div>
@endsection
