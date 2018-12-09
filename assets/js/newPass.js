$(document).ready(function() {
	$('#cambiar').click(function(e) {
		
		$.ajax({
			url: '../control/newPass.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				//$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r; // pasamos a la variable el resultado de la validacion
			if (valid == 1) { // todo va bien
				$.bootstrapGrowl('<i class="fa  fa-lg"></i> <strong> Cambio de contraseña exitoso</strong>',{
					ele: 'body',
					type: 'success',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
			});
				setTimeout(function() {
					location = "../pages/sesion.php";
				}, 5000);
			} else if (valid == 0) {
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Error al cambiar la contraseña</strong>',{
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
			$('#info').html("Ha ocurrido un error");
			//$('#info-danger').show();
		})
		.always(function() {
			setTimeout(function() {
				$('#info').html("");
				//$('#info-danger').hide();
				//$('#info-success').hide();
			}, 4000);
		});
		
	})
})