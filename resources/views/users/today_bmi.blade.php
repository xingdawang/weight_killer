@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">

	<div class="col-xs-12 col-sm-6 col-md-4">
		<div id="user_today_bmi_value" value = "{{ $avg_today_bmi }}"></div>
		<div class="center-block" id="user_today_bmi" style="width: 300px; height: 300px;">
			<div class="loader"></div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-8">
		<table id="bmi" class="wikitable col-center-block">
			<thead>
				<tr>
					<th scope="col"><strong>@lang('today_bmi.category')</strong></th>
					<th scope="col" colspan="2"><strong>@lang('today_bmi.BMI')<sup>2</sup>)<strong></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<th>@lang('today_bmi.from')</th>
					<th>@lang('today_bmi.to')</th>
				</tr>
				<tr>
					<td>@lang('today_bmi.very_severely_underweight')</td>
					<td></td>
					<td>15</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.severely_underweight')</td>
					<td>15</td>
					<td>16</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.underweight')</td>
					<td>16</td>
					<td>18.5</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.normal')</td>
					<td>18.5</td>
					<td>25</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.overweight')</td>
					<td>25</td>
					<td>30</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.obese1')</td>
					<td>30</td>
					<td>35</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.obese2')</td>
					<td>35</td>
					<td>40</td>
				</tr>
				<tr>
					<td>@lang('today_bmi.obese3')</td>
					<td>40</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="accordion-option">
		<h2 class="title">@lang('today_bmi.more_bmi')</h2>
		<a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion">
			<div class="collapse-all"> @lang('today_bmi.collapse_all') </div>
			<div class="expand-all hide"> @lang('today_bmi.expand_all') </div>
		</a>
	</div>
	<div class="clearfix"></div>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						@lang('today_bmi.what_bmi')
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<p class="text-justify">@lang('today_bmi.bmi_content1')</p>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						@lang('today_bmi.how_caculated')
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					<p class="text-justify">@lang('today_bmi.caculation')</p>
					<table class="wikitable col-center-block">
						<thead>
							<tr>
								<th><strong>@lang('today_bmi.measurement_units')<strong></th>
									<th><strong>@lang('today_bmi.formula_and_calculation')</strong></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><strong>@lang('today_bmi.km_and_m')</strong></th>
									<td>
										<p class="text-justify">@lang('today_bmi.formula'): <code>@lang('today_bmi.weight')<sup>2</sup></code></p>
										<p class="text-justify">@lang('today_bmi.calcu_content1')</p>
										<p class="text-justify">@lang('today_bmi.calcu_content2')</p>
										<p class="text-justify">@lang('today_bmi.calcu_content3'): 68 ÷ (1.65)<sup>2</sup> = 24.98</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							@lang('today_bmi.why_bmi')
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						<p class="text-justify">@lang('today_bmi.why_content1')</p>
						<ul class="list-group">
							<li class="list-group-item">@lang('today_bmi.why_content2')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.1')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.2')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.3')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.4')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.5')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.6')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.7')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.8')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.9')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.10')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.11')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.12')</li>
							<li class="list-group-item">@lang('today_bmi.why_content2.13')</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



	</div>
	@endsection
