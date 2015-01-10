function loadGroup(section, group){
	var url = "_pages/grupo.php";
	$.ajax({
		type: "POST", 
		url: url,
		data:{"grupo":group}, 
		success: function(datos){
			$(section).html(datos);
		}
	});
}