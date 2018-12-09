(function ($) {
    var timeout;
    $(document).on('mousemove', function (event) {
        if (timeout !== undefined) {
            window.clearTimeout(timeout);
        }
        timeout = window.setTimeout(function () {
            //Creas una funcion nueva para jquery 
            $(event.target).trigger('mousemoveend');
        }, 180000); //determinas el tiempo en milisegundo aqui 5 segundos
    });
}(jQuery));

$(document).on('mousemoveend', function () { //agregas la nueva funcion creada, puede ser una clase o un id
    var option = confirm("Se ha detectado inactividad en el sistema ¿desea continuar?");
    if (option == true) {
        return false;
    } else{
        alert('sesion cerrada');
        return true;
        
    }
});