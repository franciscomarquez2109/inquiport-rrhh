$(document).ready(function() {

	$('#cal_montos').click(function(e) {
		
		$.ajax({
			url: '../control/c_calculatorMonto.php',
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
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Alguno de los datos ingresados no son validos para realizar el calculo de montos</strong>',{
				ele: 'body',
				type: 'warning',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 10000
            });
            $('#monto_prima').val(0);
            $('#mes_prima').val(0);
            $('#monto').val(0);
            $('#monto_empresa').val(0);
            $('#monto_empleado').val(0)
			} else {
                $('#monto_prima').val(r[0]);
                $('#mes_prima').val(r[1]);
                $('#monto').val(r[2]);
                $('#monto_empresa').val(r[3]);
                $('#monto_empleado').val(r[4]);
                
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