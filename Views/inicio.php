<?php 

include_once "Views/Modals/Modalcrud.php";

if (isset($_POST['controldatos'])) {
	$id=$_POST['iduser'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$acc = new Acciones();
	$rest = $acc->crearEditarUsuario($id,$nombre,$apellido,$telefono,$direccion);

    if ($rest['stad']) {
    
    echo '<script type="text/javascript">swal("Muy Bien!","'.$rest['msj'].'")
    </script>';
 
    }else{
    echo '<script type="text/javascript">swal("Muy Bien!","'.$rest['msj'].'")</script>';
    }
header ("Location: http://localhost/crudphp/");
exit;
}
 
 if (isset($_GET['id'])) {
 	$iduser = $_GET['id'];
 	$id = intval($iduser);
 	$eli = new Acciones();
 	$res =$eli->eliminarUsuario($id);
 	 if ($rest['stad']) {
    
    echo '<script type="text/javascript">swal("Muy Bien!","'.$rest['msj'].'")
    </script>';
 
    }else{
    echo '<script type="text/javascript">swal("Muy Bien!","'.$rest['msj'].'")</script>';
    }
    header ("Location: http://localhost/crudphp/");
    exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Assets/css/style.css" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" href="Assets/img/nubegeko.png">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>CRUD PHP</title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			
				<h1 class="title-crud">CRUD Basico </h1>
				<h2>PHP , JS , Bootstrap , SweetAlert, JQuery, Patron de Desiño(MVC)</h2>
		
			
			<div class="text-rigth">
				<img src="Assets/img/FONDOF.png" class="rounded" alt="logo">
			</div>
			<div class="float-right">
				<button type="button" class="btn btn-primary" onclick="CrearUser();">Ingresar</button>
			</div>
			<table class="table table-striped table-hover" >
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ac = new Acciones();
						$datos = $ac->verUsuarios();
						//print_r($datos);
						foreach ($datos as $key) { ?>
							<tr>
								<td><?= $key['id'] ?></td>
								<td><?= $key['nombre'] ?></td>
								<td><?= $key['apellido'] ?></td>
								<td><?= $key['telefono'] ?></td>
								<td><?= $key['direccion'] ?></td>
								<td><div class="btn-group">
<button type="button" class="btn btn-success" onclick="EditarUser(<?=$key['id'].",'".$key['nombre']."','".$key['apellido']."','".$key['telefono']."','".$key['direccion']."'"?>);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg></button>
									<a type="button" class="btn btn-danger" href="http://localhost/crudphp/?id=<?= $key['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2.343 13.657A8 8 0 1113.657 2.343 8 8 0 012.343 13.657zM6.03 4.97a.75.75 0 00-1.06 1.06L6.94 8 4.97 9.97a.75.75 0 101.06 1.06L8 9.06l1.97 1.97a.75.75 0 101.06-1.06L9.06 8l1.97-1.97a.75.75 0 10-1.06-1.06L8 6.94 6.03 4.97z"></path></svg></a>
								</div></td>
							</tr>
					<?php }  ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script src="Assets/js/funciones.js" type="text/javascript" charset="utf-8"></script>
</html>


	
