 <?php
// Definir variables
 $Pmesant = $Ingresos = $Sentencias = $Autos = $Pmesactual = " ";
 ?>
<table class="table-primary">
  <thead>
    <tr>
      <th scope="col">Pendiente del mes anterior</th>
      <th scope="col">Ingresos</th>
      <th scope="col">sentencias</th>
     <th scope="col">autos</th>
      <th scope="col">Pendiente al final del mes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $Pmesant?></td>
      <td><?php echo $Ingresos?></td>
      <td><?php echo $Sentencias?></td>
     <td><?php echo $Autos?></td>
      <td><?php echo $Pmesactual?></td>
    </tr>
  </tbody>
</table>

  