
    function disabledDependent(id) {
        var op = confirm('¿Esta seguro de desea DESACTIVAR  este Registro?');
        if (op == true) {
            $.ajax({
                type: "POST",
                url: "../control/disabledDependent.php",
                data: {id:id},
                dataType: 'json',
                success: function () {
                    //enviar mensaje 
                }
            })
            .done(function(r){
                var v = r; // asignamos el valor del resultado php a la variable v
                //validamos los resultados para mostrar notificacion al usuario
                if (v==1) {
                    $.bootstrapGrowl('<i class="fa  fa-check fa-lg"></i> <strong> Se ha desactivo el registro</strong>',{
                        ele: 'body',
                        type: 'success',
                        width: 350,
                        align: 'right',
                        allow_dismiss: true,
                        delay: 5000
                    });
                    setTimeout(function() {location = "../pages/viewerDependent.php";}, 1000);
                }
            })
            .fail(function(){
            $.bootstrapGrowl('<i class="fa  fa-times fa-lg"></i> <strong> No se pudo desactivar el registro</strong>',{
                ele: 'body',
                type: 'danger',
                width: 350,
                align: 'right',
                allow_dismiss: true,
                delay: 5000
            });
            });
        } else{
            return false;
        }
    }





