$(document).ready(function(){
	$("#estado").change(function () {	
		$("#estado option:selected").each(function () {
			id_estado = $(this).val();
			$.post("../control/municipio.php", { id_estado: id_estado }, function(data){
			$("#municipio").html(data);
			});            
		});
	})
});
$(document).ready(function(){
	$("#municipio").change(function () {	
		$("#municipio option:selected").each(function () {
			id_muni = $(this).val();
			$.post("../control/ciudad.php", { id_muni: id_muni }, function(data){
			$("#ciudad").html(data);
			});            
		});
	})
});