@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div id="user_today_bmi_value" value = "{{ $avg_today_bmi }}"></div>
					<div class="center-block" id="user_today_bmi" style="width: 300px; height: 300px;"></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
				<table id="bmi" class="wikitable  col-center-block">
				  <tr>
				    <th>Category</th>
				    <th colspan="2">BMI (kg/m<sup>2</sup>)</th>
				  </tr>
				  <tr>
				    <td></td>
				    <th>from</th>
				    <th>to</th>
				  </tr>
				  <tr>
				    <td>Very severely underweight</td>
				    <td></td>
				    <td>15</td>
				  </tr>
				  <tr>
				    <td>Severely underweight</td>
				    <td>15</td>
				    <td>16</td>
				  </tr>
				  <tr>
				    <td>Underweight</td>
				    <td>16</td>
				    <td>18.5</td>
				  </tr>
				  <tr>
				    <td>Normal (healthy weight)</td>
				    <td>18.5</td>
				    <td>25</td>
				  </tr>
				  <tr>
				    <td>Overweight</td>
				    <td>25</td>
				    <td>30</td>
				  </tr>
				  <tr>
				    <td>Obese Class I (Moderately obese)</td>
				    <td>30</td>
				    <td>35</td>
				  </tr>
				  <tr>
				    <td>Obese Class II (Severely obese)</td>
				    <td>35</td>
				    <td>40</td>
				  </tr>
				  <tr>
				    <td>Obese Class III (Very severely obese)</td>
				    <td>40</td>
				    <td></td>
				  </tr>
				</table>
			</div>
		</div>	
	</div>
</div>
@endsection
