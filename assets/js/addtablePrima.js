$(document).ready(function(){
	var i=1;
	$('#add_table').click(function(){
		i++;
		$('#tabla_prima').append('<tr id="row'+i+'"><td  class="col-xs-1"><input type="text" name="numero[]" id="nnumero" placeholder="N°" class="form-control name_list input-sm" /></td><td><select name="sexo[]" id="sexo" class="form-control input-sm" onchange="disabled_combo()"><option value="">Seleccione</option><option value="FEMENINO">FEMENINO</option>   <option value="MASCULINO">MASCULINO</option></select> </td><td><select name="maternidad[]" id="maternidad" class="form-control input-sm"><option value="">Seleccione</option><option value="SI">SI</option>   <option value="NO">NO</option></select> </td><td><select name="hasta_25[]" id="hasta_25" class="form-control input-sm"><option value="">Seleccione</option><option value="SI">SI</option>   <option value="NO">NO</option></select> </td><td class="col-xs-1"><input type="text" name="edad_min[]" id="edad_min" placeholder="00" class="form-control name_list input-sm" /></td><td class="col-xs-1"> <input type="text" name="edad_max[]" id="edad_max" placeholder="00" class="form-control name_list input-sm" /></td><td><input type="text" name="prima_semanal[]" id="prima_semanal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" /></td><td><input type="text" name="prima_quincenal[]" id="prima_quincenal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" /></td><td><input type="text" name="prima_ejecutivo[]" id="prima_ejecutivo" placeholder="000.000 Bs.S" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove_prima"><i class="fa fa-times"></i></button></td></tr>');
		
		//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list input-sm" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">Eliminar</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove_prima', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
});