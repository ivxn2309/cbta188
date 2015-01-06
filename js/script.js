
function closeSession(){
	$.post("index.php",{"salir":"1"}).done(function(){
		window.location.href="index.php";
	});
}

function loadPartially(page, section, isUser){
	var url;
	switch(page){
		case 0:
			url = "_pages/empty.php";
			break;
		case 1:
			url = "_pages/banner.php";
			break;
		case 2:
			url = "_pages/home.php";
			break;
		case 3:
			url = "_pages/unregistered.php";
			break;
		case 4:
			url = "_pages/docentesLogin.php";
			break;
	}
	$.ajax({
		type: "POST", 
		url: url,
		data:{
			"isUser":isUser
		}, 
		success: function(datos){
			$(section).html(datos);
		}
	});
}

//Funcion de carga con Ajax
function loadContent(banner, main, user){
	loadPartially(banner, "#banner", user);
	loadPartially(main, "#main", user);
}
