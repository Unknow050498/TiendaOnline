var log_in = document.getElementById('login');
var sign_up = document.getElementById('signup');

/*===================SALE DANDO LCICK FUERA DEL CAUDRO===================*/
window.onclick = function(evento) {
    if (evento.target == log_in) {
        log_in.style.display = "none";
    }
    if(evento.target == sign_up){
        sign_up.style.display = "none";
    }
  }

  /*=====================SALIR CON "ESC"=====================*/
  window.addEventListener("keyup",function(e){

    if(e.keyCode==27) {

        document.getElementById('login').style.display = "none";
        document.getElementById('signup').style.display = "none";
    }
    });