<?php
include_once "../db/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM universidades;");
$universidades = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Tabla de ejemplo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="m-5">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Clave</th>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Web</th>
					<th>Rector</th>
					<th>Email</th>
					<th>Acceso</th>
					<th>Telefono</th>
					<th>Ciudad</th>
					<th>Numero Carrera</th>
					<th>Numero Sedes</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($universidades as $universidad){ ?>
				<tr>
					<td><?php echo $universidad->id ?></td>
					<td><?php echo $universidad->clave ?></td>
					<td><?php echo $universidad->nombre ?></td>
					<td><?php echo $universidad->categoria ?></td>
					<td><?php echo $universidad->web ?></td>
					<td><?php echo $universidad->rector ?></td>
					<td><?php echo $universidad->email ?></td>
					<td><?php echo $universidad->acceso ?></td>
					<td><?php echo $universidad->telefono ?></td>
					<td><?php echo $universidad->ciudad ?></td>
					<td><?php echo $universidad->numerocarrera ?></td>
					<td><?php echo $universidad->numsedes ?></td>
					<td><a href="<?php echo "editar.php?id=" . $universidad->id?>">Editar</a></td>
					<td><a href="<?php echo "eliminar.php?id=" . $universidad->id?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="container">
			<a href="http://localhost/php_crud/web/formulario.html" type="button"
				class="btn btn-outline-secondary">Crear universidad</a>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>

</body>

</html>