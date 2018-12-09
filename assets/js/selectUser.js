// accion al presionar click en el boton
$(document).ready(function() {
	$('#entrar').click(function(e) {
		
		$.ajax({
			url: '../control/selectUser.php',
			type: 'post',
			dataType: 'json',
			data: $('form').serialize(),
			beforeSend: function() {
				$('#entrar').attr("disabled", true);
			}
		})
		.done(function(r) {  //true
			var valid = r; // pasamos a la variable el resultado de la validacion
			if (valid == 0) { // todo va bien
				$('#entrar').html('<i class="fa fa-spinner fa-spin fa-lg"></i>');
				$.bootstrapGrowl('<i class="fa fa-spinner fa-spin fa-lg"></i> <strong> Entrando al sistema</strong>',{
					ele: 'body',
					type: 'success',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					 delay: 10000
				});
				setTimeout(function() {
					location = "../control/validationDepartment.php";
				}, 2000);
			} else if (valid == 1) { // bloqueo temporal
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Usuario bloqueado</strong>',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					 delay: 10000
				});
				$('#entrar').attr("disabled", false);
			} else if (valid == 2) { // bloqueo definitivo
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Usuario suspendido, contacte al jefe del departamento',{
					ele: 'body',
					type: 'danger',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					 delay: 10000
				});
				$('#entrar').attr("disabled", false);
			} else if (valid == 3) { // Usuario o contraseña incorrecta
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i><strong> Usuario o contraseña incorrecta',{
					ele: 'body',
					type: 'info',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					 delay: 10000
				});
				$('#entrar').attr("disabled", false);
			} else if (valid == 4) { // Usuario bloqueado
				$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Ha bloqueado su usuario',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 10000
				});
				$('#entrar').attr("disabled", false);
			}			
		})
		.fail(function() {  //false
			$.bootstrapGrowl('<i class="fa fa-times"></i><strong> El usuario no existe',{
					ele: 'body',
					type: 'danger',
					width: 350,
					align: 'rigth',
					allow_dismiss: true,
					delay: 10000
				});
				$('#entrar').attr("disabled", false);
		})		
	})
})

// accion al presionar entrer
$(document).ready(function() {
	$('#pass').keypress(function(e) {
		var enter = (e.keyCode ? e.keyCode : e.which);
		if(enter == 13) {
			$.ajax({
				url: '../control/selectUser.php',
				type: 'post',
				dataType: 'json',
				data: $('form').serialize(),
				beforeSend: function() {
					$('#entrar').attr("disabled", true);
				}
			})
			
			.done(function(r) {  //true
				var valid = r; // pasamos a la variable el resultado de la validacion
				if (valid == 0) { // todo va bien
					$('#entrar').html('<i class="fa fa-spinner fa-spin fa-lg"></i>');
					$.bootstrapGrowl('<i class="fa fa-spinner fa-spin fa-lg"></i> <strong> Entrando al sistema</strong>',{
						ele: 'body',
						type: 'success',
						width: 350,
						align: 'right',
						allow_dismiss: true,
						 delay: 10000
					});
					setTimeout(function() {
						location = "../control/validationDepartment.php";
					}, 2000);
				} else if (valid == 1) { // bloqueo temporal
					$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Usuario bloqueado</strong>',{
						ele: 'body',
						type: 'warning',
						width: 350,
						align: 'right',
						allow_dismiss: true,
						 delay: 10000
					});
					$('#entrar').attr("disabled", false);
				} else if (valid == 2) { // bloqueo definitivo
					$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Usuario suspendido, contacte al jefe del departamento',{
						ele: 'body',
						type: 'danger',
						width: 350,
						align: 'right',
						allow_dismiss: true,
						 delay: 10000
					});
					$('#entrar').attr("disabled", false);
				} else if (valid == 3) { // Usuario o contraseña incorrecta
					$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i><strong> Usuario o contraseña incorrecta',{
						ele: 'body',
						type: 'info',
						width: 350,
						align: 'right',
						allow_dismiss: true,
						 delay: 10000
					});
					$('#entrar').attr("disabled", false);
				} else if (valid == 4) { // Usuario bloqueado
					$.bootstrapGrowl('<i class="fa fa-lock fa-lg"></i><strong> Ha bloqueado su usuario',{
						ele: 'body',
						type: 'warning',
						width: 350,
						align: 'right',
						allow_dismiss: true,
						delay: 10000
					});
					$('#entrar').attr("disabled", false);
				}			
			})
			
			.fail(function() {  //false
				$.bootstrapGrowl('<i class="fa fa-times"></i><strong> El usuario no existe',{
						ele: 'body',
						type: 'danger',
						width: 350,
						align: 'rigth',
						allow_dismiss: true,
						delay: 10000
					});
					$('#entrar').attr("disabled", false);
			})
			return false;
		}
	})
})

	