$(document).ready(function() {
  $('#pass').on('key',function(e) {
    alert('h');
}
}
if(window.event){// IE
    keynum = evt.keyCode;
  }else{
    keynum = evt.which;
  }
  //comprobamos si se encuentra en el rango
  if((keynum>47 && keynum<58) || keynum == 8 || keynum == 0){
    return true;
  }else{
    // solo se permiten numeros
    
    return false;
  }