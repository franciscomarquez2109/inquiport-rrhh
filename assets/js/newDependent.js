$(document).ready(function() {
   $('#registrar_dependent').click(function(){
       $.ajax({
           type: "POST",
           url: "../control/c_dependent.php",
           data: $('form').serialize(),
           dataType: 'json',
           success: function () {
               //enviar mensaje 
           }
       })
       .done(function(r){
            var v = r; // asignamos el valor del resultado php a la variable v
            //validamos los resultados para mostrar notificacion al usuario
            if (v==2) {
                $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> Ya existe un registro con la misma cedula</strong>',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
                
            } else if (v==3) {
                $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> esta persona esta asignada a otro asegurado</strong>',{
					ele: 'body',
					type: 'warning',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
            } else if (v==1) {
                $.bootstrapGrowl('<i class="fa  fa-check fa-lg"></i> <strong> Registro Realizado</strong>',{
					ele: 'body',
					type: 'success',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
                setTimeout(function() {location = "../pages/dependent.php";}, 2000);
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