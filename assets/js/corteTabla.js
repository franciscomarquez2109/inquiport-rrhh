$(document).ready(function() {

	$('#genera_new_corte').click(function(e) {
		if ($('#cortefi').val() == "" && $('#corteff').val() =="") {
			alert('complete las fechas de corte');
			return false;
		}
		$.ajax({
			url: '../control/corteTabla.php',
			type: 'post',
			dataType: 'json',
			data: $('#form_corte_tabla').serialize(),
			beforeSend: function() {
				//$('.fa').css('display','inline');
			}
		})
		.done(function(r) {  //true
			var valid = r;
			if (valid == 1) {
				$.bootstrapGrowl('<i class="fa  fa-lg"></i> <strong> Nuevo Corte Realizado</strong>',{
				ele: 'body',
				type: 'success',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 4000
			});
				setTimeout(function() {
					location = "../pages/tablePrima.php";
			}, 2000);
			} else if (valid == 0) {
				$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Ha ocurrido un error al realizar el corte</strong>',{
				ele: 'body',
				type: 'danger',
				width: 350,
				align: 'right',
				allow_dismiss: true,
				delay: 6000
			});
			} 
	    })
	})
	

})