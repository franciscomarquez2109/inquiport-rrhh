$(document).ready(function() {
   $('#genera_table').click(function(){
       $.ajax({
           type: "POST",
           url: "../control/c_newTable.php",
           data: $('form').serialize(),
           dataType: 'json',
           success: function () {
               //enviar mensaje 
           }
       })
       .done(function(r){
            var v = r; // asignamos el valor del resultado php a la variable v
            //validamos los resultados para mostrar notificacion al usuario
            if (v==1) {
                $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> Registro realizado</strong>',{
					ele: 'body',
					type: 'success',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
                setTimeout(function() {location = "../pages/tablePrima.php";}, 3000); 
            } 
             else if (v==0) {
                $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> Error al registrar</strong>',{
					ele: 'body',
					type: 'danger',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
            }
       })
       .fail(function(){
        $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> Error inesperado</strong>',{
            ele: 'body',
            type: 'danger',
            width: 350,
            align: 'right',
            allow_dismiss: true,
            delay: 5000
        });
       });
   }) 
});