<?php 

	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];

	$sql = "DELETE FROM exch912_history WHERE recordID = $id";

	require 'connect.php';

	$sql_exe = $conn -> query($sql);

	$conn->close();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Delete</title>
 </head>
 <body>
 	<div class="container text-center">
	 	<?php  
			if ($sql_exe) {     	?>

				<h2 class='text-success'>Delete Complete! <h3>Delete ID : <?php echo $id ?> THB = <?php echo $thb ?></h3></h2>

				<a href="index.php" class="btn btn-primary">Back</a>
				
		<?php }else{?>

				<h1 class="text-danger">Delete Failed!</h1>

		<?php }					?>
	</div>

 </body>
 </html>