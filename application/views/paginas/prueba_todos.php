<?php

     
   //$materia=$_POST['materia'];
   // $provincia=$_POST['provincia'];
     echo " ESTO ES DESPUES DEL ENVIO INTRUCCIONES DE RECIBIR LA INFORMACIÓN POR SELECCIÓN";
    //recibe_datos.php
  //recibe_datos.php
    if(isset($_POST['button'])){
    $message = urlencode("After clicking the button, the form will submit to home.php. When, the page home.php loads, the previous page index.php is redirected. ");
    header("Location:".$_SERVER[localhost/proyecto/index/nuevojuzgado/nuevomovimientos]."?message=".$message);
    
   }

    ?>




   <form  method = "GET" acction ="">
                       
  <h2><p> MATERIA:
  <select name="materia1" id="Materia">
  <option value="materia">Seleccione</option>
  <option> Civil</option>;
  <option> Penal</option>;
  <option> Familia</option>;
  <option> Trabajo</option>;
  </select></h2></p>
  
  <h2><p> JUZGADO:
  <select name="juzgado1" id="Juzgado">
    
  <option value="juzgado">Seleccione</option>
  <option>JUZGADO 1º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 2º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 3º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 4º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 5º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 6º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 7º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 11º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 12º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 13º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 14º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 15º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 16º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 17º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  <option>JUZGADO 18º CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
  </select></h2></p>

  <p><button type="submit" id="Enviar"> Enviar</button> </p>

  <br>
  <br>
<div id="respuesta"></div>

</form>





    </p>
    <h2><p> PROVINCIA:
  
  <select name="provincia1" id="provincia">
  <option value="">Seleccione</option>
  <option> Bocas del Toro</option>; 
  <option> Coclé</option>;
  <option> Colón</option>;
  <option> Chiriquí</option>;
  <option> Darién</option>;
  <option> Herrera</option>;
  <option> Los Santos</option>;
  <option> Panamá</option>;
  <option> San Miguelito</option>;
  <option> Panamá Oeste</option>;
  <option> Veraguas</option>;
  </select> <h2>

    <h2>NIVEL:
     <label>
   <select name="nivel1" id="nivel">
   <option value="">Seleccione</option>
   <option>Tribunal</option>
     <option>Circuito</option>
   <option>Municipal</option>
   <option>Municipal Mixto</option>
     </select></h2>
   </label>

    </p>
    
          <h2><P>FECHA:
        <span>
        <label for="mes">MES:</label>
        <select id="mes" name="mes">
       <option value="">Seleccione</option>
        <option>Enero</option>
        <option>Febrero</option>
        <option>Marzo</option>
        <option>Abril</option>
        <option>Mayo</option>
        <option>Junio</option>
        <option>Julio</option>
        <option>Agosto</option>
        <option>Septiembre</option>
        <option>Octubre</option>
        <option>Noviembre</option>
        <option>Diciembre</option>
        </select>
        </span>
        <span>

        <label for="año">AÑO:</label>
        <select id="año" name="año">
        <option value="">Seleccione</option>
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
        <option>2025</option>
        <option>2026</option>
        <option>2027</option>
        <option>2028</option>
        <option>2029</option>
        <option>2030</option>
        <option>2031</option>
        </select><h2>
       
       
    
        

  <h2><p> TIPO DE PROCESO:
  <select name="proceso1" id="proceso">
  <option value="">Seleccione</option>
  <option>AMPARO DE GARANTIAS</option>
  <option>ORDINARIOS</option>
  <option>ORALES</option>
  <option>SUMARIOS</option>
  <option>SUCESIONES</option>
  <option>PROCESOS NO CONTENCIOSOS</option>
  <option>EJECUTIVOS SIMPLES</option>
  <option>EJECUTIVOS HIPOTECARIOS</option>
  <option>EJECUTIVOS PRENDARIOS</option>
  <option>PROCESOS DE QUIEBRAS Y CONCURSOS DE ACREEDORES</option>
  <option>QUEJAS</option>
  <option>REINICIADOS / REACTIVADOS</option>
  <option>SEGUNDA INSTANCIA</option>
  </select></h2>
  <p>
  <button type="submit" onclick= "ACEPTAR()"> ACEPTAR </button> </p>
</form>
  <?php
  if(isset($_POST['message'])){
   echo $_POST['message'];
   }
   ?>
  
</div>
  <script type="text/javascript">
       function ShowSelected()
        {
       /* Para obtener el valores */
          var cod = document.getElementById("proceso").value;
        alert(cod);
 
        /* Para obtener el texto */
       var combo = document.getElementById("proceso");
      var selected = combo.options[combo.selectedIndex].text;
      alert(selected);
      }
      <?php echo selected ?>;
   </script>    
   
  
 <script>
        $("#Enviar").click(function(){
        var nombre=document.getElementById("nombre").value;
        var apellido=document.getElementById("apellido").value;
        
        var ruta="Mat="+Nombre+"&juz="+Apellido;

              $.ajax({
        url: "recibe_datos",
        type:"POST",
        data: "ruta",

        })
        .done(function(res){
          $("#respuesta").html(res)
        })
         .fail(funtion(){
           console.log("error");

         })
         .always(function(){
           console.log("complete");

         });
      });
    </script>



    <form>

<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h2><p> JUZGADO:
  <select name="juzgado1" id="Juzgado">
  <option value='Selecciona el juzgado'>Selecciona el Juzgado</option>
  <option value='JUZGADO 1º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL'>JUZGADO 1º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;

  </h2>
  </select>
   <br>
  <br>
 <button class="btn btn-primary btn-block" name="submit">Enviar</button>

<form>