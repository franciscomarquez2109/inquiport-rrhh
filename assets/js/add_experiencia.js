$(document).ready(function(){
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
		
});