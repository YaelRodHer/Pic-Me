function faccion(i){
	document.getElementById("subirI").style.display="none";
	document.getElementById("eliminarI").style.display="none";
	document.getElementById("etiquetasI").style.display="none";
	document.getElementById("editarI").style.display="none";
	document.getElementById("contenido").style.display="none";
	if(i==1){
		document.getElementById("subirI").style.display="block";
		document.getElementById("contenido").style.display="block";
	}
	if(i==2){
		document.getElementById("eliminarI").style.display="block";
	}
	if(i==3){
		document.getElementById("etiquetasI").style.display="block";
	}
	if(i==4){
		document.getElementById("editarI").style.display="block";
	}
}
function myPop(){
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}