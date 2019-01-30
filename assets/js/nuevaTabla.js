$(document).ready(function() {
    $('#genera_new_t').click(function(e) {
		
        $.ajax({
            url: '../control/nuevaTabla.php',
            type: 'post',
            dataType: 'json',
            data: $('form').serialize(),
            beforeSend: function() {
                //$('.fa').css('display','inline');
            }
        })
        .done(function(r) {  //true
            var valid = r;
            if (valid == 1) {
                $.bootstrapGrowl('<i class="fa  fa-lg"></i> <strong> Cambios Realizados</strong>',{
                ele: 'body',
                type: 'success',
                width: 350,
                align: 'right',
                allow_dismiss: true,
                delay: 4000
            });
                setTimeout(function() {
                    location = "../pages/tablePrima.php";
            }, 2000);
            } else if (valid == 0) {
                $.bootstrapGrowl('<i class="fa fa-times fa-lg"></i> <strong> Ha ocurrido un error al actualizar la tabla</strong>',{
                ele: 'body',
                type: 'danger',
                width: 350,
                align: 'right',
                allow_dismiss: true,
                delay: 6000
            });
            } 
        })
    })
})