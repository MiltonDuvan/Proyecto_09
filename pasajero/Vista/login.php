<?php
require_once("../../Template/templateFormulario.php");
?>
<div class="formulario">
    <form action="../Controlador/login.php" method="POST">
        
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" placeholder="@correo.com" class="form-control">
            </div> 
    
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password"  class="form-control">
        </div>
        <button type="submit" name ="btn_enviar" class="btn btn-success">Iniciar</button>

    </form>
</div>