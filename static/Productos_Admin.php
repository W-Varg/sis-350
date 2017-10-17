<?php
include 'Db_config.php';
$con = new Connection();

if (isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name 	= $_POST['last_name'];
	$email 		= $_POST['email'];
	$mobile 	= $_POST['mobile'];

	$result = $con->insertRecords("INSERT INTO `crud`(`first_name`, `last_name`, `email`, `mobile`) VALUES ('$first_name','$last_name','$email','$mobile')");
	if ($result == true) {
		$message = "<div class='alert alert-success alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records are successfully Inserted</div>";
	}else{
		$message = "<div class='alert alert-danger alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records not Inserted</div>";
	}
}

if (isset($_POST['edit'])) {
	$user_id 	= $_POST['user_id'];
	$first_name = $_POST['first_name'];
	$last_name 	= $_POST['last_name'];
	$email 		= $_POST['email'];
	$mobile 	= $_POST['mobile'];

	$result = $con->updateRecords("UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`mobile`='$mobile' WHERE `id` = '$user_id'");
	if ($result == true) {
		$message = "<div class='alert alert-success alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records are successfully Updated</div>";
	}else{
		$message = "<div class='alert alert-danger alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records not Updated</div>";
	}
}

if (isset($_POST['delete'])) {
	$user_id = $_POST['user_id'];

	$result = $con->deleteRecords("DELETE FROM `crud` WHERE `id` = '$user_id'");
	if ($result == true) {
		$message = "<div class='alert alert-success alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records deleted successfully</div>";
	}else{
		$message = "<div class='alert alert-danger alert-dismissable'><a href='#' class='close data-dismiss='alert' aria-label='close'>&times;</a>Records not deleted</div>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Read Update Delete (CRUD) using PHP & Mysql</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2>CRUD using PHP and Mysql</h2>
			<?php
			if (isset($message)) {
				echo $message;
			}
			?>
			<button data-toggle="collapse" data-target="#demo" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Add Records</button>
			<div id="demo" class="collapse" style="margin-top: 10px;">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label">First Name:</label>
						<input type="text" name="first_name" placeholder="Enter First Name" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Last Name:</label>
						<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Email:</label>
						<input type="text" name="email" placeholder="Enter Email" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Mobile:</label>
						<input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" required>
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
			</div>
			<br>
			<br>
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>First Name: </th>
					<th>Last Name: </th>
					<th>Email: </th>
					<th>Mobile: </th>
					<th colspan="2">Actions</th>
				</tr>
			<?php
				$res = $con->getRecords();
				while ($row = mysql_fetch_array($res)) {
					$id = $row['id'];
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['first_name']; ?></td>
						<td><?php echo $row['last_name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $id; ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a> | <a data-toggle="modal" data-target="#delModal<?php echo $id; ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>

						<?php include 'edit_modal.php'; ?>
						<?php include 'delete_modal.php'; ?>
					</tr>
					<?php
				}
			?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<script src="js/jquery-3.2.1.js" ></script>
    <script src="js/popper.min.js"   ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>