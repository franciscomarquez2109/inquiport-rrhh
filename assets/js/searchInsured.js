$(document).ready(function() {

	$('#buscar_Insured').click(function(e) {
		
		$.ajax({
			url: '../control/c_searchInsured.php',
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
            $('#id_insured').val('');
            $('#Nombre_insured').val('');
			} else {
                $('#id_insured').val(r[0]);
                $('#Nombre_insured').val(r[1]);
				$('#tipo_nomina').val(r[2]);
				$('#tipo_ingreso').val(r[3]);
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

	$('#cedula_insured').keypress(function(e) {
		var enter = (e.keyCode ? e.keyCode : e.which);
		if (enter == 13) {
			$.ajax({
				url: '../control/c_searchInsured.php',
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
				$('#id_insured').val('');
				$('#Nombre_insured').val('');
				} else {
					$('#id_insured').val(r[0]);
					$('#Nombre_insured').val(r[1]);
					$('#tipo_nomina').val(r[2]);
					$('#tipo_ingreso').val(r[3]);
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
