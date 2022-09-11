<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../db/base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM universidades WHERE id = ?;");
$sentencia->execute([$id]);
$universidad = $sentencia->fetch(PDO::FETCH_OBJ);
if($universidad === FALSE){
	#No existe
	echo "¡No existe alguna universidad con ese ID!";
	exit();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Registrar universidad</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<center>
		<div class="container border p-3">
			<h2>Registrar Universidad</h2>
			<div class="container col-lg-7 p-2">

				<form method="post" action="../controlador/guardarDatosEditados.php">
					<input type="hidden" name="id" value="<?php echo $universidad->id; ?>">

					<div class="mb-3">
						<label for="clave" class="form-label">Clave:</label>
						<input class="form-control" value="<?php echo $universidad->clave ?>" name="clave" required
							type="text" id="clave" placeholder="Escribe tu clave...">
					</div>
					<div class="mb-3">
						<label for="nombre" class="form-label">Nombre:</label>
						<input class="form-control" value="<?php echo $universidad->nombre ?>" name="nombre" required
							type="text" id="nombre" placeholder="Escribe tu nombre...">
					</div>
					<div class="mb-3">
						<label for="categoria" class="form-label">categoria:</label>
						<input class="form-control" value="<?php echo $universidad->categoria ?>" name="categoria" required
							type="text" id="categoria" placeholder="Escribe tu categoria...">
					</div>
					<div class="mb-3">
						<label for="web" class="form-label">web:</label>
						<input class="form-control" value="<?php echo $universidad->web ?>" name="web" required type="text"
							id="web" placeholder="Escribe tu web...">
					</div>
					<div class="mb-3">
						<label for="rector" class="form-label">rector:</label>
						<input class="form-control" value="<?php echo $universidad->rector ?>" name="rector" required
							type="text" id="rector" placeholder="Escribe tu rector...">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">email:</label>
						<input class="form-control" value="<?php echo $universidad->email ?>" name="email" required
							type="text" id="email" placeholder="Escribe tu email...">
					</div>
					<div class="mb-3">
						<label for="acceso" class="form-label">acceso:</label>
						<input class="form-control" value="<?php echo $universidad->acceso ?>" name="acceso" required
							type="text" id="acceso" placeholder="Escribe tu acceso...">
					</div>
					<div class="mb-3">
						<label for="telefono" class="form-label">telefono:</label>
						<input class="form-control" value="<?php echo $universidad->telefono ?>" name="telefono" required
							type="text" id="telefono" placeholder="Escribe tu telefono...">
					</div>
					<div class="mb-3">
						<label for="ciudad" class="form-label">ciudad:</label>
						<input class="form-control" value="<?php echo $universidad->ciudad ?>" name="ciudad" required
							type="text" id="ciudad" placeholder="Escribe tu ciudad...">
					</div>
					<div class="mb-3">
						<label for="numerocarrera" class="form-label">Numero Carrera</label>
						<select class="form-control" name="numerocarrera" required name="numerocarrera"
							id="numerocarrera">
							<option value="">--Selecciona--</option>
							<option <?php echo $universidad->numerocarrera === '1' ? "selected='selected'": "" ?> value="1">1</option>
							<option <?php echo $universidad->numerocarrera === '2' ? "selected='selected'": "" ?> value="2">2</option>
							<option <?php echo $universidad->numerocarrera === '2' ? "selected='selected'": "" ?> value="2">2</option>
							<option <?php echo $universidad->numerocarrera === '3' ? "selected='selected'": "" ?> value="3">3</option>
							<option <?php echo $universidad->numerocarrera === '4' ? "selected='selected'": "" ?> value="4">4</option>
							<option <?php echo $universidad->numerocarrera === '5' ? "selected='selected'": "" ?> value="5">5</option>
							<option <?php echo $universidad->numerocarrera === '6' ? "selected='selected'": "" ?> value="6">6</option>
							<option <?php echo $universidad->numerocarrera === '7' ? "selected='selected'": "" ?> value="7">7</option>
							<option <?php echo $universidad->numerocarrera === '8' ? "selected='selected'": "" ?> value="8">8</option>
							<option <?php echo $universidad->numerocarrera === '9' ? "selected='selected'": "" ?> value="9">9</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="numsedes" class="form-label">Numero Sedes</label>
						<select class="form-control" name="numsedes" required name="numsedes" id="numsedes">
							<option value="">--Selecciona--</option>
							<option <?php echo $universidad->numsedes === '1' ? "selected='selected'": "" ?> value="1">1</option>
							<option <?php echo $universidad->numsedes === '2' ? "selected='selected'": "" ?> value="2">2</option>
							<option <?php echo $universidad->numsedes === '3' ? "selected='selected'": "" ?> value="3">3</option>
							<option <?php echo $universidad->numsedes === '4' ? "selected='selected'": "" ?> value="4">4</option>
							<option <?php echo $universidad->numsedes === '5' ? "selected='selected'": "" ?> value="5">5</option>
							<option <?php echo $universidad->numsedes === '6' ? "selected='selected'": "" ?> value="6">6</option>
							<option <?php echo $universidad->numsedes === '7' ? "selected='selected'": "" ?> value="7">7</option>
							<option <?php echo $universidad->numsedes === '8' ? "selected='selected'": "" ?> value="8">8</option>
							<option <?php echo $universidad->numsedes === '9' ? "selected='selected'": "" ?> value="9">9</option>
						</select>
					</div>
					<div class="container m-5">
						<input type="submit" class="btn btn-outline-primary" value="Guardar cambios">
						<a href="http://localhost/php_crud/crud/listarUniversidad.php" type="button"
							class="btn btn-outline-danger">Cancelar</a>
					</div>
				</form>
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
					integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
					crossorigin="anonymous">
				</script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
					integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
					crossorigin="anonymous">
				</script>
			</div>
		</div>
	</center>
</body>

</html>