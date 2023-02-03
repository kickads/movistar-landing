(function ($) {
	
	"use strict";
	
	const form = document.querySelector('#form-number');
	
	form.addEventListener('submit', e => {
		e.preventDefault();
		
		saveRegister();
	})
	
	function saveRegister() {
		var phone = $("#ani2").val();
		
		var dataString = 'phone=' + phone;
		
		$.ajax({
			type: "POST",
			url: "forms/register",
			data: dataString,
			success: function (data) {
				console.log(data);
			},
			error: function (exception, data) {
				console.error(data);
			}
		});
	}
})(jQuery);