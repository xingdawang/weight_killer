@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-3">@lang('missing_today_bfp.dear') {{ Auth::user()->name }} </h1>
		<p class="lead ">@lang('missing_today_bfp.error')<a href={{ route('user_view_weight') }}> @lang('missing_today_bfp.more') </a> @lang('missing_today_bfp.from_you')</p>
	</div>
</div>
@endsection
