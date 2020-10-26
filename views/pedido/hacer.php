<?php if(isset($_SESSION["identity"])):?>
<h1>Realizar pedido</h1>
<p>
    <a href="<?=base_url?>carrito/index">Ver productos y precio del pedido</a>
</p>
<br>
<h3>Dirección para el envío:</h3>
<form action="<?=base_url?>pedido/add" method="post">
    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" required/>
    <label for="ciudad">Ciudad</label>
    <input type="text" name="localidad" required/>
    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" required/>
    <input type="submit" value="Confirmar pedido" />
</form>

<?php else:?>
<h1>Tienes que estar identificado</h1>
<p>Necesitas estar logueado para poder realizar tu pedido</p>
<?php endif; ?>