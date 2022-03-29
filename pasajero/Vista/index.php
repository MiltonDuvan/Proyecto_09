<?php
require_once("../../Template/templateIndex.php");
require_once("../Modelo/pasajero.php");
$modeloPasajero= new Pasajero();

?>

<h2>Listado de Pasajeros</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $verPasajeros= $modeloPasajero->getPasajero();
      if($verPasajeros != Null){
          foreach ($verPasajeros as $listarPasajero) {
              # code...
        
      ?>
    <tr>
      <th scope="row">1<?= $listarPasajero['idPasajero'];?></th>
      <td><?= $listarPasajero['nombre'];?></td>
      <td><?= $listarPasajero['email'];?></td>
      <td><?= $listarPasajero['telefono'];?></td>
    </tr>
    
    <?php
      }
    }
    ?>
  </tbody>
</table>