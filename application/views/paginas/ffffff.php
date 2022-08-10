<?php
if ((isset($_POST['descripcionmateria'])) && ($_POST['descripcionmateria'] != '')
    (isset($_POST['nombrejuzgado'])) && ($_POST['nombrejuzgado'] != '')
    (isset($_POST['nombreprovincia'])) &&($_POST['nombreprovincia'] != '')
    (isset($_POST['descripcionnivel'])) && ($_POST['descripcionnivel'] != '')
    (isset($_POST['mes'])) && ($_POST['mes'] != '')
    (isset($_POST['año'])) && ($_POST['aaa'] != '')
    (isset($_POST['nombremovi']))&&($_POST['nombremovi'] != '')) {
    // echo $_POST['descripcionmateria'];
    $nuevo = new POD();
     $asd = $nuevo->setServicio($_POST['descripcionmateria'],$_POST['nombrejuzgado'],$_POST['nombreprovincia'],$_POST['descripcionnivel'],$_POST['mes'],$_POST['aaa'],$_POST['nombremovi']); 
    echo "$nuevo";
    
    }
?>


<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
        <select id="aaa" name="año">
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
    </select><h2>

<br>
 <button class="btn btn-primary btn-block" name="submit">Enviar</button>
 <form>
    
   

 