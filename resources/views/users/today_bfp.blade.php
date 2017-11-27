@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div id="user_today_bfp_value" value = "{{ $avg_today_bfp }}"></div>
				<div id="user_today_sex_value" value = "{{ $current_user_sex }}"></div>
				<div class="center-block"  id="user_today_bfp" style="width: 300px; height: 300px;"></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
				<table id="bfp" class="wikitable  col-center-block">
					<tbody><tr>
						<th scope="col" width="110">Description</th>
						<th style="text-align: center;" scope="col" width="80">Women</th>
						<th style="text-align: center;" scope="col" width="80">Men</th>
					</tr>
					<tr>
						<td>Essential fat</td>
						<td align="center">10–13%</td>
						<td align="center">3-6%</td>
					</tr>
					<tr>
						<td>Athletes</td>
						<td align="center">13–20%</td>
						<td align="center">6-13%</td>
					</tr>
					<tr>
						<td>Fitness (good)</td>
						<td align="center">20–25%</td>
						<td align="center">13-17%</td>
					</tr>
					<tr>
						<td>Average (acceptable)</td>
						<td align="center">25-31%</td>
						<td align="center">17-22%</td>
					</tr>
					<tr>
						<td>Overweight</td>
						<td align="center">31-39%</td>
						<td align="center">22-29%</td>
					</tr>
					<tr>
						<td>Obese</td>
						<td align="center">39% or more</td>
						<td align="center">29% or more</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection
