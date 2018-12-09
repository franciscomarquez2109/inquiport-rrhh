$(document).on("click", ".ver", function () {
	var id = $(this).data('id');
	//$(".modal-body #bookId").val( myBookId );
   //$('#addBookDialog').modal('show');
   alert(id);
   $.ajax({
	url: '../control/viewerInsured.php',
	type: 'post',
	dataType: 'json',
	data: {id:id},
	beforeSend: function() {
		//$('.fa').css('display','inline');
	}
})
.done(function(r) {  //true
	var valid = r;
	
	if (valid == 0) {
		$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Error en la Busqueda</strong>',{
		ele: 'body',
		type: 'warning',
		width: 350,
		align: 'right',
		allow_dismiss: true,
		delay: 10000
	});
	} else {
		$('#idpersona').val(r[0]);
		$('#ci').val(r[1]);
		$('#nombres').val(r[2]);
		$('#fn').val(r[3]);
		$('#sexo').val(r[4]);
		$('#edad').val(r[5]);
		$('#maternidad').val(r[6]);
		$('#departamento').val(r[7]);
		$('#tipo_nomina').val(r[8]);
		$('#condicion').val(r[9]);
		$('#monto_prima').val(r[10]);
		$('#mes_prima').val(r[11]);
		$('#monto').val(r[12]);
		$('#monto_empresa').val(r[13]);
		$('#monto_empleado').val(r[14]);
		
	}

})
.fail(function() {  //false
	$.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Error inesperado</strong>',{
		ele: 'body',
		type: 'danger',
		width: 350,
		align: 'right',
		allow_dismiss: true,
		delay: 6000
	});
})
});