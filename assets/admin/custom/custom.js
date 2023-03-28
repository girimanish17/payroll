/*back to top*/
$(document).on('keydown','.phonevalidations',function(e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        } 
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
});

$(document).ready(function(){
	if($('#login_form').length > 0){
		$('#login_form').validate({
			rules: {
				'email': {
					required: true,
                    email: true
				},
				'password': {
					required: true
				}
				
			},
			messages: {
				'email': {
					required: 'Email address is required',
					email: 'Valid Email is required'
				},
				'password': {
					required: 'Password field is required'
				}
			},
			submitHandler: function(form) {
				form.submit();
			}
		});
	}
	
	if($('#profile_form').length > 0){
		$('#profile_form').validate({
			rules: {
				email: {
					required: true,
                    email: true
				},
				name: {
					required: true
				}
				
			},
			messages: {
				email: {
					required: 'Email address is required',
					email: 'Valid Email is required'
				},
				name: {
					required: 'Name field is required'
				}
			},
			submitHandler: function(form) {
				form.submit();
			}
		});
	}
	
	if($('#passoword_form').length > 0){
		$('#passoword_form').validate({
			rules: {
				'Current_Password': {
					required: true
				},
				'New_Password': {
					required: true
				},
				'Confirm_Password': {
					required: true,
					equalTo: '#New_Password'
				}	
			},
			submitHandler: function(form) {
				$.ajax({
					type:'POST',
					url:'process/process.php?action=change_password',
					data: $("#passoword_form").serialize(),
					success: function (data) {
						if(data == 1)
						{
							$('#Current_Password').val('');
							$('#New_Password').val('');
							$('#Confirm_Password').val('');
							$('#error_pass').html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Your Password Change Successfully.</div>');
							return false;
						}
						else if(data == 0)
						{
							$('#Current_Password').val('');
							$('#New_Password').val('');
							$('#Confirm_Password').val('');
							$('#error_pass').html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Current Password is not matched.</div>');
							return false;	
						}
					}
				});
				return false;
			}
		});
	}
});

