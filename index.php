<!DOCTYPE html>
<html>
<head>
	<title>Ura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="index.php" class="active">Log In</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?reason=register">Register</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 login">
				<h3 class="h4 text-center text-warning" style="display: none;" id="error"></h3>
				<?php
				if(isset($_GET['reason'])){
					$reason = $_GET['reason'];
				}else {
					$reason = "";
				}

				switch ($reason) {
					case 'register':
						# code...
						include "includes/register.php";
						break;
					
					default:
						# code...
						include "includes/login.php";
						break;
				}

				?>
			</div>
			<div class="col-md-3"></div>
		</div>
		<p></p>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/app.js"></script>

<script type="text/javascript">
	const link = document.querySelectorAll("ul li a");

	link.forEach((data)=>{
		data.addEventListener("click",function(e){

			if(e.target.classList.contains("active")){
				e.target.classList.toggle("active");
			}else {
				data.classList.add("active");
			}

			// e.preventDefault();
		});
	})

</script>

</body>
</html>