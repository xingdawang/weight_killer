$( document ).ready(function() {

	// Customize user birth date selection.
	$('#user_birthdate').datetimepicker({
		format: 'YYYY-MM-DD'
	});


	// Customize user today weight time selectin.
	$('#today_weight').datetimepicker({
		defaultDate: moment(),
		format: 'HH:mm'
	});


});