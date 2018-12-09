$(document).ready(function() {

	$('#searchUserBlock').click(function(e) {
		
		$.ajax({
			url: '../control/searchUserBlock.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r;
			if (valid == 1) {
				$('#info').html("Buscando <i class='fas fa-spinner fa-spin'></i>");
				setTimeout(function() {
					location = "../pages/recoverUsersBlock.php";
			}, 1000);
			} else if (valid == 0) {
				$.bootstrapGrowl('<i class="fa fa-lock-open fa-lg"></i> <strong> El usuario no esta bloqueado</strong>',{
				ele: 'body',
				type: 'info',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 10000
			});
			}
			 else if (valid == 2) {
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i> <strong> Usuario Suspendido, pongase en contacto con el jefe del departamento</strong>',{
				ele: 'body',
				type: 'warning',
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
				 delay: 10000
			});
		})
		.always(function() {
			setTimeout(function() {
				$('#info').html("");
			}, 3000);
		});
		
	})
})