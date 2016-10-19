function Insertar(){

	var patente = $("#patente").val();
	console.log(patente); 

	$.ajax({url:'php/nexo.php',type:'post',data:{ p:patente }}).then(
				function(exito){

					alert(exito);

				},
				function(error){

					alert(error);
				}

		);


}