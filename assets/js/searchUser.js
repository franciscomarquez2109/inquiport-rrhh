$(document).ready(function() {

	$('#searchUser').click(function(e) {
		
		$.ajax({
			url: '../control/searchUser.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				//$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r;
			if (valid == 0) {
				$('#info').html("Buscando <i class='fas fa-spinner fa-spin'></i>");
				setTimeout(function() {
					location = "../pages/recoverPw.php";
			}, 1000);
			} else if (valid == 1) {
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i> <strong> Usuario bloqueado</strong>',{
				ele: 'body',
				type: 'warning',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 10000
			});
			} else if (valid == 2) {
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i> <strong> Usuario suspendido, contacte al jefe del departamento</strong>',{
				ele: 'body',
				type: 'danger',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 10000
			});
			}
		
		})
		.fail(function() {  //false
			$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> El usuario no existe</strong>',{
				ele: 'body',
				type: 'danger',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 6000
			});
		})
				
	})
})