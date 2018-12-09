
function Edad(fn) {
    var hoy = new Date();
    var cumpleanos = new Date(fn);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

    document.getElementById('edad').value = edad;
}
    




    