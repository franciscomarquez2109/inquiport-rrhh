$(document).ready(function() {

	$('#buscar_persona').click(function(e) {
		
		$.ajax({
			url: '../control/c_searchPeople.php',
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
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> No hay registro</strong>',{
				ele: 'body',
				type: 'warning',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 10000
			});
			
			} else if (valid == 2) {
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i>  No se puede asegurar si el tipo de ingreso es<strong>BANCO ELEGIBLE - EGRESADO - TERCERO</strong>',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 10000
				});
			}
			else {
                $('#idpersona').val(r[0]);
                $('#ci').val(r[1]);
                $('#nombres').val(r[2]);
                $('#fn').val(r[4]);
                $('#edad').val(r[5]);
				$('#sexo').val(r[3]);
				$('#tipo_ingreso').val(r[6]);
                
			}
		
		})
		.fail(function() {  //false
			$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Error en la consulta</strong>',{
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

$(document).ready(function() {

	$('#cedula_persona').keypress(function(e) {
		var enter = (e.keyCode ? e.keyCode : e.which);
		if (enter == 13) {
			$.ajax({
				url: '../control/c_searchPeople.php',
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
					$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> No hay registro</strong>',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 10000
				});
				} else if (valid == 2) {
					$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i>  No se puede asegurar si el tipo de ingreso es<strong> "BANCO ELEGIBLE - EGRESADO"</strong>',{
						ele: 'body',
						type: 'warning',
						width: 600,
						align: 'right',
						allow_dismiss: true,
						delay: 10000
					});
				} 
				else {
					$('#idpersona').val(r[0]);
					$('#ci').val(r[1]);
					$('#nombres').val(r[2]);
					$('#fn').val(r[4]);
					$('#edad').val(r[5]);
					$('#sexo').val(r[3]);
					$('#tipo_ingreso').val(r[6]);
					
				}
			
			})
			.fail(function() {  //false
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Error en la consulta</strong>',{
					ele: 'body',
					type: 'danger',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 6000
				});
			})
			return false;
		}
			
	})
})