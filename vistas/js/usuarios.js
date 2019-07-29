
var tabla;
 
 //Función que se ejecuta al inicio
  function init(){

      listar();

      //cuando se da click al boton submit entonces se ejecuta la funcion guardaryeditar(e);
	$("#usuario_form").on("submit",function(e)
	{

		guardaryeditar(e);	
	})

	 //cambia el titulo de la ventana modal cuando se da click al boton
	


	   //Mostramos los permisos
	   /*en este caso NO se envia un id_usuario ya que se va agregar un 
	   usuario nuevo, solo se enviaría cuando se edita y ahí se enviaría el id_usuario
	   que se está editando*/
	   $.post("../ajax/usuario.php?op=permisos&id_usuario=",function(r){
	        $("#permisos").html(r);
	 });

  }

  //funcion que limpia los campos del formulario


    //function listar 

        
     //Mostrar datos del usuario en la ventana modal del formulario 

     

    //la funcion guardaryeditar(e); se llama cuando se da click al boton submit  
      
      function guardaryeditar(e){

      	e.preventDefault(); //No se activará la acción predeterminada del evento
      	var formData = new FormData($("#usuario_form")[0]);

      	  $.ajax({

               	    url: "../ajax/usuario.php?op=guardaryeditar",
				    type: "POST",
				    data: formData,
				    contentType: false,
				    processData: false,

				    success: function(datos){

				    	console.log(datos);

				    	$('#usuario_form')[0].reset();
						$('#usuarioModal').modal('hide');

						$('#resultados_ajax').html(datos);
						
				
                        limpiar();

				    }
               });

      }  
       
       //EDITAR ESTADO DEL USUARIO
       //importante:id_usuario, est se envia por post via ajax
       


        //ELIMINAR USUARIO




  init();

 




