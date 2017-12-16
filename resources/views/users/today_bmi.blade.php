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
					<th scope="col"><strong>Category</strong></th>
					<th scope="col" colspan="2"><strong>BMI (kg/m<sup>2</sup>)<strong></th>
				</tr>
			</thead>
			<tbody>
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
			</tbody>
		</table>
	</div>

	<div class="accordion-option">
		<h2 class="title">More about BMI</h2>
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
						What is BMI?
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<p class="text-justify">BMI is a person’s weight in kilograms divided by the square of height in meters. BMI does not measure body fat directly, but research has shown that BMI is moderately correlated with more direct measures of body fat obtained from skinfold thickness measurements, bioelectrical impedance, densitometry (underwater weighing), dual energy x-ray absorptiometry (DXA) and other methods. Furthermore, BMI appears to be as strongly correlated with various metabolic and disease outcome as are these more direct measures of body fatness. In general, BMI is an inexpensive and easy-to-perform method of screening for weight category, for example underweight, normal or healthy weight, overweight, and obesity.</p>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						How is BMI calculated?
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					<p class="text-justify">BMI is calculated the same way for both adults and children. The calculation is based on the following formulas:</p>
					<table class="wikitable col-center-block">
						<thead>
							<tr>
								<th><strong>Measurement Units<strong></th>
									<th><strong>Formula and Calculation</strong></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><strong>Kilograms and meters (or centimeters)</strong></th>
									<td>
										<p class="text-justify">Formula: <code>weight (kg) / [height (m)]<sup>2</sup></code></p>
										<p class="text-justify">With the metric system, the formula for BMI is weight in kilograms divided by height in meters squared. Because height is commonly measured in centimeters, divide height in centimeters by 100 to obtain height in meters.</p>
										<p class="text-justify">Example: Weight = 68 kg, Height = 165 cm (1.65 m)</p>
										<p class="text-justify">Calculation: 68 ÷ (1.65)<sup>2</sup> = 24.98</p>
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
							Why is BMI used to measure overweight and obesity?
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						<p class="text-justify">People who have obesity are at increased risk for many diseases and health conditions, including the following:</p>
						<ul class="list-group">
							<li class="list-group-item">All-causes of death (mortality)</li>
							<li class="list-group-item">High blood pressure (Hypertension)</li>
							<li class="list-group-item">High LDL cholesterol, low HDL cholesterol, or high levels of triglycerides (Dyslipidemia)</li>
							<li class="list-group-item">Type 2 diabetes</li>
							<li class="list-group-item">Coronary heart disease</li>
							<li class="list-group-item">Stroke</li>
							<li class="list-group-item">Gallbladder disease</li>
							<li class="list-group-item">Osteoarthritis (a breakdown of cartilage and bone within a joint)</li>
							<li class="list-group-item">Sleep apnea and breathing problems</li>
							<li class="list-group-item">Chronic inflammation and increased oxidative stress19,20</li>
							<li class="list-group-item">Some cancers (endometrial, breast, colon, kidney, gallbladder, and liver)</li>
							<li class="list-group-item">Low quality of life</li>
							<li class="list-group-item">Mental illness such as clinical depression, anxiety, and other mental disorders</li>
							<li class="list-group-item">Body pain and difficulty with physical functioning</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



	</div>
	@endsection
