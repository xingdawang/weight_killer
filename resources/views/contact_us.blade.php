@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div id="map" class="col-xs-12 col-sm-12 col-md-12 jumbotron-fluid">
				{!! Mapper::render() !!}
			</div>
		</div>
		<div class="contact_us col-xs-12 col-sm-12 col-md-12 jumbotron-fluid">
				<h2>contact us</h2>
				<div class="details">
					<div class="details_title">Author:</div>
					<div class="details_content">
					{{ config('constants.author1_name') }} <a href="mailto:{{ config('constants.author1_email') }}">{{ config('constants.author1_email') }}</a><br>
					{{ config('constants.author2_name') }} <a href="mailto:{{ config('constants.author2_email') }}">{{ config('constants.author2_email') }}</a>
					</div>
				</div>
				<div class="details">
					<div class="details_title">Address:</div>
					<div class="details_content">
					{{ config('constants.author_address')}}
					</div>
				</div>
			</div>
	</div>
</div>
@endsection