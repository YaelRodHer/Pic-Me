function values(){
	document.getElementById("mensajeExito").style.display="none";
	var no=document.getElementById("name").value;
	var em=document.getElementById("email").value;
	var p1=document.getElementById("password1").value;
	var p2=document.getElementById("password2").value;
	var ti=document.getElementById("tipo").selected;
	var b=0;
	if(no==''){
		document.getElementById("mensajeE1").style.display="block";
		b=1;
	}
	if(no!=''){
		document.getElementById("mensajeE1").style.display="none";
	}

	if(em==''){
		document.getElementById("mensajeE2").style.display="block";
		b=1;
	}
	if(em!=''){
		document.getElementById("mensajeE2").style.display="none";
	}

	if(p1!=p2 || p1=='' || p2=='' ){
		document.getElementById("mensajeE3").style.display="block";
		b=1;
	}else{
		document.getElementById("mensajeE3").style.display="none";
	}

	if(ti=="ninguno"){
		document.getElementById("mensajeTi").style.display="block";
	}

	if(!document.form.agree.checked) {
		document.getElementById("mensajeE4").style.display="block";
		b=1;
	}else{
		document.getElementById("mensajeE4").style.display="none";
	}

	if(b==0){
		document.form.submit();
		document.getElementById("mensajeExito").style.display="block";
		document.getElementsByName("enviar").style.display="none";
	}else{
		return false;
	}
}