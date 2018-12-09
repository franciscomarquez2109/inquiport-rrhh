$(document).ready(function(){
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
		
});