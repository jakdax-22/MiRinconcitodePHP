function insertar(preguntas,respuestas){
    cadena="preguntas" + preguntas + "&respuestas" + respuestas;
    $.ajax({
        type:"POST",
        url:"insertar.php",
        data:cadena,
        success:function(r){
            if (r==1){
                alertify.success("Insertado con éxito");
            }
            else{
                alertify.error ("Hubo algún error");
            }
        }
    });
}
function update(datos){
   d=datos.split('||');
   
   $('#editpreguntas').val(d[1]);
   $('#editrespuestas').val(d[2]);

    
}


