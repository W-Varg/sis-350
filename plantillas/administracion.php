<?php
include 'conexion.php';
$conect = new Connection();

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Panel de Administracion de la Empresa</h2>
  <p>detalle de la empresa</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#ventas">ventas</a></li>
    <li><a data-toggle="pill" href="#buses">buses</a></li>
    <li><a data-toggle="pill" href="#trabajadores">trabajadores</a></li>
    <li><a data-toggle="pill" href="#reserva">reservas</a></li>
    <li><a data-toggle="pill" href="#tramos">tramos</a></li>
    <li><a data-toggle="pill" href="#viajes">viajes</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Configuraciones</h3>
      <p>Configuraciones de la empresa</p>
    </div>
    <div id="ventas" class="tab-pane fade">
      <h3>ventas</h3>
      <p>lista de ventas realizadas </p>
      <div class="row">
      	<div class="col-md-8">
      		<table class="table table-hover">
		      <tr class="active">
		        <td>placa </td>
		        <td>ruta  </td>
		        <td>nombre Cliente</td>
		        <td>Precio bs. </td>
		        <td>fecha </td>
		        <td>accion </td>

		      </tr>
		      <?php
		      $result= mysql_query("select * from venta");
		      while($row=mysql_fetch_array($result)){ ?>
		        <tr>
		          <td><?php echo $row["CiTrab"]; ?></td>
		          <td><?php echo $row["IdRuta"]; ?></td>
		          <td><?php echo $row["NombreCli"]; ?></td>
		          
		          <td><?php echo $row["Precio"]; ?></td>
		          <td><?php echo $row["Fecha"]; ?></td>
		          <td>
		          	<a class="btn btn-info btn-sm"
		          	data-toggle="modal"
		          	data-target="#myModal<?php echo $id; ?>">
		          	<i class="glyphicon glyphicon-pencil"></i> Editar</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm">
		          	<i class="glyphicon glyphicon-trash"></i> eliminar</a>
					</td>
					<?php include 'edit_modal.php'; ?>
						<?php include 'delete_modal.php'; ?>
		        </tr>
		      <?php
		      }
		      ?>
		    </table>
      	</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>