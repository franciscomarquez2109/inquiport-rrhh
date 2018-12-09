$(document).ready(function(){
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
		
});