TIPO DE PROCESO</div></b></h1>
	<form  method="POST" action="/index.php/juzgados">
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
	</select><h2>
	<p>
	<button>GUARDAR</button>
	</p>
	</form>
	
	<script type="text/javascript">
       function ShowSelected()
        {
       /* Para obtener el valor */
        var cod = document.getElementById("proceso1").value;
        alert(cod);
 
        /* Para obtener el texto */
       var combo = document.getElementById("proceso1");
      var selected = combo.options[combo.selectedIndex].text;
      alert(selected);
     }
   </script>