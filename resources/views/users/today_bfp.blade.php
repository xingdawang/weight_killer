@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div id="user_today_bfp_value" value = "{{ $avg_today_bfp }}"></div>
		<div id="user_today_sex_value" value = "{{ $current_user_sex }}"></div>
		<div class="center-block"  id="user_today_bfp" style="width: 300px; height: 300px;">
			<div class="loader"></div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-8">
		<table id="bfp" class="wikitable  col-center-block">
			<tbody>
				<tr>
					<th scope="col"><strong>@lang('today_bfp.description')</strong></th>
					<th scope="col"><strong>@lang('today_bfp.women')</strong></th>
					<th scope="col"><strong>@lang('today_bfp.men')</strong></th>
				</tr>
				<tr>
					<td>@lang('today_bfp.essential_fat')</td>
					<td>10–13%</td>
					<td>3-6%</td>
				</tr>
				<tr>
					<td>@lang('today_bfp.very_lean')</td>
					<td>13–20%</td>
					<td>6-13%</td>
				</tr>
				<tr>
					<td>@lang('today_bfp.lean')</td>
					<td>20–25%</td>
					<td>13-17%</td>
				</tr>
				<tr>
					<td>@lang('today_bfp.normal')</td>
					<td>25-31%</td>
					<td>17-22%</td>
				</tr>
				<tr>
					<td>@lang('today_bfp.overweight')</td>
					<td>31-39%</td>
					<td>22-29%</td>
				</tr>
				<tr>
					<td>@lang('today_bfp.obese')</td>
					<td>39%@lang('today_bfp.or_more')</td>
					<td>29%@lang('today_bfp.or_more')</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="accordion-option">
		<h2 class="title">@lang('today_bfp.more_bfp')</h2>
		<a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion">
			<div class="collapse-all">@lang('today_bfp.collapse_all')</div>
			<div class="expand-all hide">@lang('today_bfp.expand_all')</div>
		</a>
	</div>
	<div class="clearfix"></div>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						@lang('today_bfp.what_is_bfp')
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<p class="text-justify">@lang('today_bfp.bfp_content1')</p>

					<p class="text-justify">@lang('today_bfp.bfp_content2')</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
