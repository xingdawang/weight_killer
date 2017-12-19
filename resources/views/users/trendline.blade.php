@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">

		<div class="hidden" id="user_weights">
			{{ $user_weights }}
		</div>

		<!--Div that will hold the dashboard-->
		<div id="dashboard_div" class="text-center">
			<!--Divs that will hold each control and chart-->
			<div class="chart_title">@lang('trendline.my_trendline')</div>
			<br/>
			<div id="chart_div"></div>
			<br/>
			<div class="chart_title">@lang('trendline.time_interval')</div>
			<br/>
			<div id="filter_div"></div>
		</div>
	</div>
</div>
@endsection
