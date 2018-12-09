$(document).ready(function() {
   $('#savedependent').click(function(){
       $.ajax({
           type: "POST",
           url: "../control/updateDependent.php",
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
                $.bootstrapGrowl('<i class="fa  fa-check fa-lg"></i> <strong> Cambios Realizado</strong>',{
					ele: 'body',
					type: 'success',
					width: 350,
					align: 'right',
					allow_dismiss: true,
					delay: 5000
                });
                setTimeout(function() {location = "../pages/viewerDependent.php";}, 2000);
            }
       })
       .fail(function(){
        $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> No se Guardaron los cambios</strong>',{
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