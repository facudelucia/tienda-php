<h1>Registrarse</h1>
<?php if(isset($_SESSION["register"]) && $_SESSION["register"] == "complete"):?>
<strong class="alert_green">Registro Completado</strong>
<?php elseif(isset($_SESSION["register"]) && $_SESSION["register"] == "failed"): ?>
<strong class="alert_red">Fallo en el registro</strong>
<?php endif;?>
<?php Utils::deleteSession("register");?>
<form action="<?=base_url?>usuario/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required />
    <label for="apellidos">Apellido</label>
    <input type="text" name="apellidos" required />
    <label for="email">Email</label>
    <input type="email" name="email" required />
    <label for="password">Password</label>
    <input type="password" name="password" required />
    <input type="submit" value="Registrarse" />
</form>