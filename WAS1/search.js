$(document).ready(function() {
	$("#panggilan").keyup(function () {
	let input = $(this).val();
	if (input != "") {
		$.ajax({
			url: "action.php",
			method: "post",
			data: {panggilan:input},
			success: function (response) {
				console.log(response)		  
			$("#show-panggilan").html(response);
			$(".panggilan").click(function (){
					$("#panggilan").val($(this).text());
					$("#show-panggilan").html("");
			})
		  	},
		});
	}else{
		$("#show-panggilan").html("");
	}
	});


	$("#section").keyup(function () {
	let input = $(this).val();
	if (input != "") {
		$.ajax({
			url: "action.php",
			method: "post",
			data: {section:input},
			success: function (response) {
				console.log(response)
			$("#show-section").html(response);
			$(".jurusan").click(function (){
					$("#section").val($(this).text());
					$("#show-section").html("");
			})
			},
		});
	}else{
		$("#show-section").html("");
	}
	});

	$("#tempatpertemuan").keyup(function () {
		let input = $(this).val();
		if (input != "") {
			$.ajax({
				url: "action.php",
				method: "post",
				data: {tempatpertemuan:input},
				success: function (response) {
					console.log(response)
				$("#show-tempatpertemuan").html(response);
				$(".tikum").click(function (){
						$("#tempatpertemuan").val($(this).text());
						$("#show-tempatpertemuan").html("");
				})
				},
			});
		}else{
			$("#show-tempatpertemuan").html("");
		}
		});



});
  
  

 
  


 



  


 



  