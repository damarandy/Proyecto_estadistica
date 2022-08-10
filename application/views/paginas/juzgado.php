<?php

$i="";
$datas="";
$datos[]="";
session_start();
$seleccionado = NULL;
$seleccionado1 = NULL;
$errorsAsun="";

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['juzgado'][0])) {
    $errorsAsun = "\n Debe seleccionar un materia";
  } else {
    $seleccionado = dataForm($_POST['juzgado']);
  
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
   <h2><p> JUZGADO:
  <select name="juzgado" id="Juzgado">
    
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
  <br>
 <button class="btn btn-primary btn-block" name="submit">Enviar</button>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if (empty($nombreErr) and empty($apellidoErr) and empty ($juzgados)) {
    echo "<br><h3>Tus valores son:</h3>";
    echo "<strong>Juzgados</strong>: ".$seleccionado1;
    echo "<br>";
  

    }

//}
?>