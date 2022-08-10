
<?php
// Definir variables
$nombreErr = $emailErr = "";
$nombre = $apellido = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["nombre"])) {
   $nombreErr = "Nombre es requerido";
   }else {
   $nombre = validar_input($_POST["nombre"]);
   }

   if (empty($_POST["apellido"])) {
   $nombreErr = "Nombre es requerido";
   }else {
   $apellido = validar_input($_POST["apellido"]);
   }

}
function validar_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
<div class="container">
<br>
<div class="card bg-light">
<div class="card-header">
Formulario de registro con validación
</div>
<div class="card-body">
<span class = "error">* Campos requeridos.</span>

<div class="row">
     <div class="col-md-6">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
          <label class="col-form-label"><span class="error">* </span>Nombre</label>
          <input name="nombre" type="text" class="form-control" value="<?php if (!empty($_POST["nombre"])) {
           echo $nombre; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $nombreErr;?></span>
          </div>

         <div class="form-group">
          <label class="col-form-label"><span class="error">* </span>Apellido</label>
          <input name="apellido" type="text" class="form-control" value="<?php if (!empty($_POST["nombre"])) {
           echo $nombre; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $nombreErr;?></span>
          </div>

    </div>
    <div class="form-group">
    <button class="btn btn-primary btn-block" name="submit">Enviar</button>
    </div>
</form>
</div>

</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($nombreErr) and empty($emailErr)) {
echo "<br><h6>Tus valores son:</h6>";
echo "<strong>Nombre</strong>: ".$nombre;
echo "<br>";
echo "<strong>Apellido</strong>: ".$apellido;
echo "<br>";
}
}
?>
</div>
</div>
</div>
</body>
</html>