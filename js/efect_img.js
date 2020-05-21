var win = document.getElementById('popUp');

var i;
var c;
var coffee = document.getElementsByClassName('coffee_image');
var Img = document.getElementById("images");
var Txt = document.getElementById("txt");

for(i=0; i < coffee.length; i++){
  
//Por cada imagen le asignamos el evento clic que mostrara la imagen en la modal.
c = coffee[i];
c.onclick = function(){
    
    win.style.display = "block";
    Img.src = this.src;
    Txt.innerHTML = this.alt;
    
    }
}

/*===================SALE DANDO LCICK FUERA DEL CAUDRO===================*/

win.onclick = function (event) {
  if (event.target == win) {
    win.style.display = "none";    
  }  
}

/*=====================SALIR CON "ESC"=====================*/
window.addEventListener("keyup",function(e){

  if(e.keyCode==27) {

      document.getElementById('popUp').style.display="none";

  }
  });