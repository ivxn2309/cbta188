function registraAlumno(){
	var nom = document.getElementById('nombre_emp');
	var errnom = document.getElementById('nombre_err');

	var puesto = document.getElementById('puesto_emp');
	var errpuesto = document.getElementById('puesto_err');

	var edad = document.getElementById('edad_emp');
	var erredad = document.getElementById('edad_err');

	var dom = document.getElementById('domicilio_emp');
	var errdom = document.getElementById('dom_err');

	var nick = document.getElementById('nick_emp');
	var errnick = document.getElementById('nick_err');

	var pass = document.getElementById('pass_emp');
	var errpass = document.getElementById('emp_err');

	var admin = document.getElementById('isAdminChk').checked;
	admin = admin? 1:0;

	var ok = true;
	//Nombre
	if(nom.value == ""){
		errnom.innerHTML ="Debes completar este campo";
		ok = false;
	}else if(nom.value.lenght > 80){
		errnom.innerHTML ="Demasiado largo";
		ok = false;
	}else {
		errnom.innerHTML="";
	}
	
	//Puesto
	if(puesto.value == ""){
		errpuesto.innerHTML ="Debes completar este campo";
		ok = false;
	}else if(puesto.value.lenght > 80){
		errpuesto.innerHTML ="Demasiado largo";
		ok = false;
	}else {
		errpuesto.innerHTML="";
	}
	
	//Edad
	if(edad.value == ""){
		erredad.innerHTML ="Debes completar este campo";
		ok = false;
	}else if(edad.value != "" && (edad.value < 1 || edad.value > 100)){
		erredad.innerHTML ="Valor incorrecto";
		ok = false;
	}else {
		erredad.innerHTML="";
	}

	//Direccion
	if(dom.value == ""){
		errdom.innerHTML ="Debes completar este campo";
		ok = false;
	}else if(dom.value.lenght > 80){
		errdom.innerHTML ="Demasiado largo";
		ok = false;
	}else {
		errdom.innerHTML="";
	}

	//Nickname
	if(nick.value == ""){
		errnick.innerHTML ="Debes completar este campo";
		ok = false;
	}else if (nick.value.indexOf(" ") > 0) {
		errnick.innerHTML ="No se admite espacios";
		ok = false;
	}else if(nick.value.lenght > 50){
		errnick.innerHTML ="Demasiado largo";
		ok = false;
	}else {
		errnick.innerHTML="";
	}

	//Password
	if(pass.value == ""){
		errpass.innerHTML ="Debes completar este campo";
		ok = false;
	}else if(pass.value.lenght > 80){
		errpass.innerHTML ="Demasiado largo";
		ok = false;
	}else {
		errpass.innerHTML="";
	}

	if(ok){
		$.blockUI({ css: { backgroundColor: '#000', color: '#DDD', opacity: '.7', borderColor: '#000'}, message: '<h4>Espere por favor...</h4>' });
		var request = getRequestObject();
		var datos = {
			nombre : nom.value,
			puesto : puesto.value,
			edad : edad.value,
			dom : dom.value,
			nick : nick.value,
			pass : pass.value,
			admin : admin
		};

		request.onreadystatechange = function() {
			if (request.readyState== 4 && request.status == 200) {
				var result=request.responseText; 
				if (result.indexOf("Error")==-1){
					alert("El empleado ha sido registrado");
					$('#list_emp').click();
					$.unblockUI();
				}
				else {
					alert("No se puede alcanzar el servicio: " + result);
				}
			}
		};

		request.open("POST","php/funciones.php",true);
		var datos="nuevoEmp="+escape(JSON.stringify(datos));
		request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		request.send(datos);
	}
}