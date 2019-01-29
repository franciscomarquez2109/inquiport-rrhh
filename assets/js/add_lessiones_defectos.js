$(document).ready(function(){
	var i=1;
	$('#add_defecto').click(function(){
		i++;
		$('#tabla_defecto_fisico').append('<tr id="row'+i+'"><td><input type="text" name="defecto_fisico[]" id="defecto_fisico[]" placeholder="Nombre del Problema" class="form-control name_list input-sm" onkeypress="return SoloLetras(event);"/></td><td><label class="radio-inline"><input type="radio" id="tratamiento" name="tratamiento[]" value="SI">SI</label><label class="radio-inline"><input type="radio" id="tratamiento" name="tratamiento[]" value="NO">NO</label></td><td><input type="text" name="detalle_tratamiento[]" id="detalle_tratamiento[]" placeholder="Explique" class="form-control name_list input-sm"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_refe', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
    });
    
    var i=1;
	$('#add_lesion').click(function(){
		i++;
		$('#tabla_lesiones').append('<tr id="row'+i+'"><td><input type="text" name="lesiones[]" id="lesiones[]" placeholder="Nombre de alguna lesion, Operacion o Afección" class="form-control name_list input-sm" onkeypress="return SoloLetras(event);"/></td><td><input type="text" name="duracion_lession[]" id="duracion_lession[]" placeholder="Años/Meses" class="form-control name_list input-sm" onkeypress="return SoloNumeros(event);"/></td><td><input type="text" name="estado_lesion[]" id="estado_lesion[]" placeholder="Estado de la lesion" class="form-control name_list input-sm" onkeypress="return SoloLetras(event);"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_refe', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	var i=1;
	$('#add_dist_aca').click(function(){
		i++;
		$('#tabla_dist_academicas').append('<tr id="row'+i+'"><td><input type="text" name="dist_academicas[]" placeholder="Academicas, Honores, Premios, Becas, Otros" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove_dist"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_dist', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});

	var i=1;
	$('#add_grado').click(function(){
		i++;
		$('#container_grado').append('<div class="row" id="row'+i+'"><div class="col-md-12"><label for="">TRABAJO N°: '+i+'</label></div><div class="col-md-4"><label for="nom_empresa">Nombre Empresa:</label>  <input type="text" name="nom_empresa[]" placeholder="Nombre de la institución" class="form-control name_list input-sm" /></div>	<div class="col-xs-3">	  <label for="nom_empresa">Naturaleza del Trabajo:</label>  <input type="text" name="natu_trabajo[]" placeholder="Cargo" class="form-control name_list input-sm" />	</div>	<div class="col-xs-2">  <label for="nom_empresa">Desde:</label>  <input type="date" name="fecha_desde[]" class="form-control name_list input-sm" />	</div><div class="col-xs-2"> <label for="nom_empresa">Hasta:</label>  <input type="date" name="fecha_hasta[]" class="form-control name_list input-sm" /> <br>	</div>	<div class="col-md-3"> <label for="nom_empresa">Supervisor:</label>	 <input type="text" name="supervisor_empresa[]" placeholder="Nombre" class="form-control name_list input-sm" />	</div>	<div class="col-xs-2">  <label for="nom_empresa">Sueldo Inicial:</label>  <input type="text" name="saldo_final[]" placeholder="00.000,000 BsS" class="form-control name_list input-sm" /></div>	<div class="col-xs-2">  <label for="nom_empresa">Sueldo Final:</label>  <input type="text" name="saldo_final[]" placeholder="00.000,000 BsS" class="form-control name_list input-sm" />	</div>	<div class="col-xs-4">  <label for="nom_empresa">Razón de retiro:</label>  <input type="text" name="retiro_empresa[]" placeholder="Motivo" class="form-control name_list input-sm" /></div>	<div class="col-xs-3"><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button><hr></div></div>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_grado_inst', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
		
	});

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

	var i=1;
	$('#add_part_sociales').click(function(){
		i++;
		$('#tabla_part_sociales').append('<tr id="row'+i+'"><td><input type="text" name="part_sociales[]" placeholder="Sociales, Artistas y/o Deportivas, Otros" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove_part"><i class="fa fa-times"></i></button></td></tr>');

		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_part', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});

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