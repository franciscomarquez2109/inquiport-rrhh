$(document).ready(function(){
	var i=1;
	$('#add_grado_inst').click(function(){
		i++;
		$('#tabla_grado_inst').append('<tr id="row'+i+'"><td><select name="nivel_educativo[]" id="nivel_educativo" class="form-control input-sm"><option value="">Seleccione</option><option value="PRIMARIA">Primaria</option><option value="SECUNDARIA">Secundaria</option><option value="SUPERIOR">Superior</option><option value="POSTGRADO">Postgrado</option></select></td><td><input type="text" name="institucion[]" id="institucion" placeholder="Nombre de la institución" class="form-control name_list input-sm" /></td><td><input type="text" name="ciudad[]" id="ciudad" placeholder="Nombre" class="form-control name_list input-sm" /></td><td><input type="text" name="desde_hasta[]" id="desde_hasta" placeholder="0000 - 0000" class="form-control name_list input-sm" /></td><td><input type="text" name="anos_culminacion[]" id="anos_culminacion" placeholder="00" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_grado_inst', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
		
	});
		
});