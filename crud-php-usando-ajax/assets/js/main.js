	$(document).ready(function(){
		// recuperar datos de la tabla clientes..
	   	function loadTableData(){
	       $.ajax({
	           url : "ver.php",
	           type : "POST",
	           success:function(data){
	              $("#tableData").html(data);
	           }
	       });
	   	}
	   	loadTableData();
		$("#registro").click(function(e){
			e.preventDefault();
			var nombre = $("#nombre").val();
			var email = $("#email").val();
			var pais = $("#pais").val();
			var pwd = $("#pwd").val();
			if(nombre !=="" && email !=="" && pais !=="" && pwd !==""){
				$.ajax({
					url : "accion.php",
					type: "POST",
					cache: false,
					data : {nombre:nombre,email:email,pais:pais, pwd:pwd},
					success:function(data){
						alertify.success("Registro agregado con éxito");	

						$("#clienteForm")[0].reset();
						loadTableData();
					},
				});
			}else{
				alertify.error("Debe introducir todos los campos");
			}
		});	

		// Eliminar registro a MySql desde PHP usando jQuery AJAX
		$(document).on("click",".borrar-btn",function(){
			if (confirm("¿Estás seguro de eliminar el registro?")) {
				var id = $(this).data('id');
				var element = this;
				$.ajax({
					url :"borrar.php",
					type:"POST",
					cache:false,
					data:{borrarId:id},
					success:function(data){
						if (data == 1) {
							$(element).closest("tr").fadeOut();
							alertify.success("Regitro borrado con éxito");	
						}else{
							alert.error("Ha habido algún error...");
						}
					}
				});
			}
		});

		// Edite el registro a mysqli desde php usando jquery ajax
		$(document).on("click",".editar-btn",function(){
			var id = $(this).data('id');
			$.ajax({
				url :"extraer.php",
				type:"POST",
				cache:false,
				data:{editarId:id},
				success:function(data){
					$("#editarForm").html(data);
				},
			});
		});

		// User record update to mysqli from php using jquery ajax
		$(document).on("click","#editarSubmit", function(){
			var editar_id = $("#editarId").val();
			var nombre = $("#editarNombre").val();
			var email = $("#editarEmail").val();
			var pais = $("#editarPais").val();
			var password = $("#editarPassword").val();
			
			$.ajax({
				url:"actualizar.php",
				type:"POST",
				cache:false,
				data:{editar_id:editar_id,nombre:nombre,email:email,pais:pais,password:password},
				success:function(data){
					if (data ==1) {
						alertify.success("Registro actualizado correctamente");
						loadTableData();
					}else{
						alert("Ha habido un error...");	
					}
				}
			});
		});
	});