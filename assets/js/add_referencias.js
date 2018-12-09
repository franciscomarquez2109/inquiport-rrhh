$(document).ready(function(){
	var i=1;
	$('#add_refe').click(function(){
		i++;
		$('#tabla_referencias').append('<tr id="row'+i+'"><td><input type="text" name="nom_ape_refe[]" placeholder="nombre y apellido" class="form-control name_list input-sm" /></td><td><input type="text" name="telefono_refe[]" placeholder="0000000" class="form-control name_list input-sm" /></td><td><input type="text" name="ocupacion_refe[]" placeholder="Ejemplo: Ingeniero" class="form-control name_list input-sm" /></td><td><input type="text" name="compania_refe[]" placeholder="Nombre de la Compañia" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove_refe"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_refe', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
		
});