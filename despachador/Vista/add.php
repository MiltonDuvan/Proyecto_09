<?php
require_once("../../Template/templateFormulario.php");
?>
<div class="formulario">
    <form action="../Controlador/add.php" method="POST">
        <div class="mb-3">
            <label>Nombres completos</label>
            <input type="text" name="nombres" class="form-control">
        </div>
        <div class="mb-3">
            <label>Telefono</label>
            <input type="int" name="telefono" placeholder="+57" class="form-control">
        </div>
        <div class="mb-3">
            <label>Horario</label>
            <input type="time" name="horario"  class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email"  class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password"  class="form-control">
        </div>
        <button type="submit" name="btn_enviar" class="btn btn-success">Registrar</button>
    </form>
</div>