$('#Enviar').click(regresar);
        
        function regresar(){

        $.ajax({
        url: 'recibe_datos.php',
        type:'POST',
        contentypy:"aplication/json;charset=utf-8",
        dataType: 'json',

        data:{
          nombre:$('#nombre').val(),
          apellido:$('#apellido').val() 
        }

        })
        .done(function(data){
          $('#salida').append(data[0][0][0]);
          $('#nombre').val('');
          $('#apellido').val('');


        }
        );
         

        }