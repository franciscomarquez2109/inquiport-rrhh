
//desactiva combo maternidad en la tabla prima
function mater() {
    if (document.getElementById('sexo').value == "MASCULINO") {
        document.getElementById("maternidad").disabled = true;
    }else{
        document.getElementById("maternidad").disabled = false;
    }
}
//desactiva fecha de expiracion de licencia
function fecha_expeOff(opt_fecha){
    if (opt_fecha == "SI") {
        document.getElementById("fecha_expe").disabled = false;
    } else if (opt_fecha = "NO") {
        document.getElementById("fecha_expe").disabled = true;
    }
}
//desactiva conocimiento de empleo en la empresa
function empleoOff(opt_empleo){
    if (opt_empleo == "SI") {
        document.getElementById("empleo_ant_cuando").disabled = false;
        document.getElementById("empleo_ant_donde").disabled = false;
    } else if (opt_empleo == "NO") {
        document.getElementById("empleo_ant_cuando").disabled = true;
        document.getElementById("empleo_ant_donde").disabled = true;
    }
}
//desactiva idioma 
function idiomaOff(opt_idioma){
    if (opt_idioma == "SI") {
        document.getElementById("nom_idioma").disabled = false;
        document.getElementById("habla_idioma").disabled = false;
        document.getElementById("escribe_idioma").disabled = false;

    } else if (opt_idioma == "NO") {
        document.getElementById("nom_idioma").disabled = true;
        document.getElementById("habla_idioma").disabled = true;
        document.getElementById("escribe_idioma").disabled = true;

    }
}
//desactiva datos de vehiculo
function vehiculoOff(opt_vehiculo){
    if (opt_vehiculo == "SI") {
        document.getElementById("marca_vehiculo").disabled = false;
        document.getElementById("modelo_vehiculo").disabled = false;
        document.getElementById("version_vehiculo").disabled = false;
        document.getElementById("transmicionauto").disabled = false;
        document.getElementById("transmicionsincro").disabled = false;
        document.getElementById("cant_cilindros").disabled = false;
        document.getElementById("titulo_registrosi").disabled = false;
        document.getElementById("titulo_registrono").disabled = false;
        document.getElementById("ano_vehiculo").disabled = false;
        document.getElementById("color_vehiculo").disabled = false;
        document.getElementById("uso").disabled = false;
        document.getElementById("num_placa").disabled = false;
        document.getElementById("num_motor").disabled = false;
        document.getElementById("num_carroceria").disabled = false;


    } else if (opt_vehiculo == "NO") {
        document.getElementById("marca_vehiculo").disabled = true;
        document.getElementById("modelo_vehiculo").disabled = true;
        document.getElementById("version_vehiculo").disabled = true;
        document.getElementById("transmicionauto").disabled = true;
        document.getElementById("transmicionsincro").disabled = true;
        document.getElementById("cant_cilindros").disabled = true;
        document.getElementById("titulo_registrosi").disabled = true;
        document.getElementById("titulo_registrono").disabled = true;
        document.getElementById("ano_vehiculo").disabled = true;
        document.getElementById("color_vehiculo").disabled = true;
        document.getElementById("uso").disabled = true;
        document.getElementById("num_placa").disabled = true;
        document.getElementById("num_motor").disabled = true;
        document.getElementById("num_carroceria").disabled = true;

    }
}
