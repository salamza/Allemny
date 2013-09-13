$(document).ready(function(){
	/* ---- Using Modernizr to check if the "required" and "placeholder" attributes are supported ---- */			

		$('#mailform').submit(function(e){
		var x=$('#submail').val(); 
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(x)) {
			$('#mailform').append('<p class="popup">Not a valid Email</p>');
			$('#submail').focus();
			return false;
		}
		$("#mailform").validate({
		rules: {
			email: {
				required: true,
				email: true
					}
			}
		});
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
		$.ajax({
			type:'POST',
			url:post_url,
			data:post_data,
			success:function(){
				$(form).fadeOut(1000,function(){form.html('<div style="padding-left:450px;"><h3>Thank You.</h3></div>').fadeIn();});
			}
		});
	});
	$('#submail').keydown(function() {
	$('.popup').remove();
});
$('#submail').blur(function() {
	$('.popup').remove();
});
	$("#vote").validate({
		rules: {
			optionsRadios: {
				required: true
			}
		}
	});
	$('#vote').submit(function(e) {
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
		$.ajax({
			type:'POST',
			url:post_url,
			data:post_data,
			success:function(){
				$(form).fadeOut(1000,function(){form.html('<div style="padding:140px 0px 0px 100px;"><h3>Thank You.</h3></div>').fadeIn();});
			}
		});
	});

	$('#joinus').submit(function(e) {
		$("#joinus").validate({
		rules: {
			year: {
				required: true ,
				number: true
			},
			email: {
				required: true,
				email: true,
				minlength: 2
			},			
			mobile: {
				required: true,
				number: true,
				minlength: 10
			}
		}
	});
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
		$.ajax({
			type:'POST',
			url:post_url,
			data:post_data,
			dataType:"json",
			success: function (response) {
			   if(response.status == "error")
			   		alert(response.message);
			   	else if (response.status == "success")
					$(form).fadeOut(1000,function(){form.html('<div style="padding-left:450px;"><h3>Thank You.</h3></div>').fadeIn();});				
			}
		});
	});	

	$('#contactus').submit(function(e) {
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
		$.ajax({
			type:'POST',
			url:post_url,
			data:post_data,
			success:function(){
				$(form).fadeOut(1000,function(){form.html('<div style="padding-left:450px;"><h3>Thank You.</h3></div>').fadeIn();});
			}
		});
	});
	
		$('#signinfrom').submit(function(e) {
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
		$.ajax({
			type:'POST',
			url:post_url,
			data:post_data,
			success:function(){
				$(form).fadeOut(1000,function(){form.html('<div style="color:red;"><h3>Error, connecting to server failed.</h3></div>').fadeIn();});
			}
		});
	});
	

});