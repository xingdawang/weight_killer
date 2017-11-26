@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="hidden" id="user_weights">
			{{ $user_weights }}
		</div>

		<!--Div that will hold the dashboard-->
		<div id="dashboard_div">
			<!--Divs that will hold each control and chart-->
			<div id="chart_div"></div>
			<br/>
			<div id="filter_div"></div>
		</div>
	</div>
</div>
</div>
@endsection
