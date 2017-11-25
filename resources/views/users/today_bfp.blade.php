@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-md-left one-third">
				<div id="user_today_bfp_value" value = "{{ $avg_today_bfp }}"></div>
				<div id="user_today_sex_value" value = "{{ $current_user_sex }}"></div>
				<div id="user_today_bfp" style="width: 300px; height: 300px;"></div>
			</div>
			<div class="col-md-12 text-md-right two-thirds">
				<table class="wikitable">
					<tbody><tr>
						<th scope="col" width="110">Description</th>
						<th scope="col" width="80">Women</th>
						<th scope="col" width="80">Men</th>
					</tr>
					<tr>
						<td>Essential fat</td>
						<td align="center">10–13%</td>
						<td align="center">3-6%</td>
					</tr>
					<tr>
						<td>Athletes</td>
						<td align="center">14–20%</td>
						<td align="center">7-13%</td>
					</tr>
					<tr>
						<td>Fitness (good)</td>
						<td align="center">21–25%</td>
						<td align="center">14-17%</td>
					</tr>
					<tr>
						<td>Average (acceptable)</td>
						<td align="center">26-31%</td>
						<td align="center">18-22%</td>
					</tr>
					<tr>
						<td>Overweight</td>
						<td align="center">32-39%</td>
						<td align="center">23-29%</td>
					</tr>
					<tr>
						<td>Obese</td>
						<td align="center">40% or more</td>
						<td align="center">30% or more</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection
