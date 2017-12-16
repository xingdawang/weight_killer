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
					<th scope="col"><strong>Description</strong></th>
					<th scope="col"><strong>Women</strong></th>
					<th scope="col"><strong>Men</strong></th>
				</tr>
				<tr>
					<td>Essential fat</td>
					<td>10–13%</td>
					<td>3-6%</td>
				</tr>
				<tr>
					<td>Athletes</td>
					<td>13–20%</td>
					<td>6-13%</td>
				</tr>
				<tr>
					<td>Fitness (good)</td>
					<td>20–25%</td>
					<td>13-17%</td>
				</tr>
				<tr>
					<td>Average (acceptable)</td>
					<td>25-31%</td>
					<td>17-22%</td>
				</tr>
				<tr>
					<td>Overweight</td>
					<td>31-39%</td>
					<td>22-29%</td>
				</tr>
				<tr>
					<td>Obese</td>
					<td>39% or more</td>
					<td>29% or more</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="accordion-option">
		<h2 class="title">More about BFP</h2>
		<a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion">
			<div class="collapse-all"> Collapse All </div>
			<div class="expand-all hide"> Expand All </div>
		</a>
	</div>
	<div class="clearfix"></div>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						What is BFP?
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<p class="text-justify">The body fat percentage (BFP) of a human or other living being is the total mass of fat divided by total body mass; body fat includes essential body fat and storage body fat. Essential body fat is necessary to maintain life and reproductive functions. The percentage of essential body fat for women is greater than that for men, due to the demands of childbearing and other hormonal functions. The percentage of essential fat is 2–5% in men, and 10–13% in women (referenced through NASM). Storage body fat consists of fat accumulation in adipose tissue, part of which protects internal organs in the chest and abdomen. The minimum recommended total body fat percentage exceeds the essential fat percentage value reported above. A number of methods are available for determining body fat percentage, such as measurement with calipers or through the use of bioelectrical impedance analysis.</p>

					<p class="text-justify">The body fat percentage is a measure of fitness level, since it is the only body measurement which directly calculates a person's relative body composition without regard to height or weight. The widely used body mass index (BMI) provides a measure that allows the comparison of the adiposity of individuals of different heights and weights. While BMI largely increases as adiposity increases, due to differences in body composition, other indicators of body fat give more accurate results; for example, individuals with greater muscle mass or larger bones will have higher BMIs. As such, BMI is a useful indicator of overall fitness for a large group of people, but a poor tool for determining the health of an individual.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
