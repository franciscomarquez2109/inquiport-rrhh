$(document).ready(function(){
	var i=1;
	$('#add_hijos').click(function(){
		i++;
		$('#tabla_hijos').append('<tr id="row'+i+'"><td><input type="text" name="name_hijo[]" placeholder="Ejemplo: Juan" class="form-control name_list input-sm" /></td><td><select name="sexo_hijo[]" id="sexo" class="form-control input-sm"><option value="">Seleccione</option><option value="FEMENINO">FEMENINO</option><option value="MASCULINO">MASCULINO</option></select></td><td><input type="text" name="lugar_nac_hijo[]" placeholder="Nombre del lugar" class="form-control name_list input-sm" /></td><td><input type="text" name="ci_hijo[]" placeholder="00000000" class="form-control name_list input-sm" /></td><td><input type="text" name="ocupacion_hijo[]" placeholder="Ejemplo: Estudiante" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
		
});