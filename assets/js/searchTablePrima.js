$(document).ready(function() {
   $('#actualizarTabla').click(function(){
       var estatus = 1;
    $.post("../control/searchtablePrima.php", { estatus: estatus }, function(data){
        $("#newCorte").html(data);
        }); 
   }) 
});