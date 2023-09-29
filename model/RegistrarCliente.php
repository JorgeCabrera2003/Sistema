<?php 

	require_once("c://xampp/htdocs/romanfenix - copia/menuh.php");

 ?>

	<main>
			<h1>Registrar Clientes</h1>
			<br>


		<form id="formInscrip" action="CCliente.php" method="POST" autocomplete="off">


			<input type="text" name="cedula" placeholder="Cedula" required>	
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="direccion" placeholder="direccion" required>
			<input type="text" name="contacto" placeholder="Contacto" required>
			<select name="Estado" id="MEstado">

				<option value="" selected hidden>Estado</option>

				<option value="Lara">Lara</option>
				<option value="caracas">caracas</option>
				<option value="monagas">monagas</option>
				<option value="bolivia">bolivia</option>
				<option value="zulia">zulia</option>
				<option value="cojedes">cojedes</option>
			</select>

			<label for="">Foto del Cliente</label>
			<input type="file" name="foto" id="foto"placeholder="Seleccionar Foto">

			<input type="submit" value="Registrar" name="enviar">

		</form>

	</main>
</body>
</html>

<?php 

	require_once("c://xampp/htdocs/romanfenix - copia/menuf.php");

 ?>