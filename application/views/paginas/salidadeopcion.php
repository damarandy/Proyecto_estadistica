<?php

$i="";
$datas="";
$datos[]="";
session_start();
$seleccionado = NULL;
$seleccionado1 = NULL;
$errorsAsun="";

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['materia'][0])) {
    $errorsAsun = "\n Debe seleccionar un materia";
  } else {
    $seleccionado = dataForm($_POST['materia']);
  
  }

 

}

function dataForm($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <h2><p> MATERIA:
  <select name="materia" id="Materia">
  <option value='Selecciona una materia'>Selecciona una Materia</option>
  <option value='Civil'>Civil</option>;
  <option value='Penal'>Penal</option>;
  <option value='Familia'>Familia</option>;
  <option value='Trabajo'>Trabajo</option>;
  </select></h2></p>
  <br>
 <button class="btn btn-primary btn-block" name="submit">Enviar</button>
 <form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if (empty($nombreErr) and empty($apellidoErr) and empty ($materia)) {
    echo "<br><h3>Tus valores son:</h3>";
    echo "<strong>Materia</strong>: ".$seleccionado;
    echo "<br>";
  

    }

//}
?>
