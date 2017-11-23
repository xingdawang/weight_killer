$( document ).ready(function() {


	$('#user_birthdate').datetimepicker({
		format: 'YYYY-MM-DD'
	});


	$('#datetimepicker3').datetimepicker({
		defaultDate: moment(),
		format: 'LT'
	});


});