@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-3">@lang('profile_needed.dear') {{ Auth::user()->name }} </h1>
		<p class="lead ">@lang('profile_needed.error') <a href={{ route('user_update') }}>@lang('profile_needed.profile')</a> @lang('profile_needed.page')</p>
	</div>
</div>
@endsection
