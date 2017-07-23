$(document).ready(function(){
	$("#login-form").submit(function(){
		var username = $("#login-form input[name=username]").val();
		var password = $("#login-form input[name=password]").val();

		var dataToSend = {username: username, password: password};
		var url = window.base_url+"home/validate_login";
		$.ajax({
			url: url,
			type: "POST",
			data: dataToSend,
			success: function(result,status){
				resultObject = JSON.parse(result);
				if(resultObject.success){
					if(resultObject.type == "seller"){
						window.location.href = window.base_url+"seller";
					}else if(resultObject.type == "eater"){						
						window.location.href = window.base_url+"foodiez";
					}
				}else{
					//alert("No of rows: ".resultObject.nof);
				}
				return false;
			},
			error: function(result,status){
				console.log(result);
			}
		});
		return false;
	})
})