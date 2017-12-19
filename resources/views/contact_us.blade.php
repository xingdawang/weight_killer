@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div id="map">
				{!! Mapper::render() !!}
			</div>
		</div>
		<div class="contact_us">
				<h2>@lang('contact_us.contact_us')</h2>
				<div class="details">
					<div class="details_title">@lang('contact_us.author'):</div>
					<div class="details_content">
						<h5>{{ config('constants.author1_name') }} <a href="mailto:{{ config('constants.author1_email') }}">{{ config('constants.author1_email') }}</a>
						</h5>
						<h5>
						{{ config('constants.author2_name') }} <a href="mailto:{{ config('constants.author2_email') }}">{{ config('constants.author2_email') }}</a>
						</h5>
					</div>
				</div>
				<div class="details">
					<div class="details_title">@lang('contact_us.address'):</div>
						<div class="details_content">
						<h5>
						{{ config('constants.author_address')}}
						</h5>						
						</div>
				</div>
			</div>
	</div>
</div>
@endsection