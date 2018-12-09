var cont=0

function cambia() {

cont = cont % 2;

if (cont==1){

document.getElementById("fotocambia").src="fotos/una.jpg";

}

else{

document.getElementById("fotocambia").src="fotos/dos.jpg";

}

cont++;

}
function inicio() {

setInterval(cambia, 3000);

}

window.onload=inicio;

