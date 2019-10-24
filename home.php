<?php session_start();
include "includes/db.config.php";
$chasis = $_SESSION['chasis'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage Multiplex Portal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		/*body {
			background: linear-gradient(to left, rgb(200,20,100),rgba(200,20,100,0.6));
			color: #fff;
		}*/

	</style>
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" href="">Your Tickets</a></li>
			<li class="nav-item"><a class="nav-link" href="">Your Tickets</a></li>
		</ul>

		<?php include "includes/display_tickets.php";?>
	</div>

	

	

</body>
</html>