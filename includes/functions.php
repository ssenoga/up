<?php
session_start();
include "db.config.php";

if(isset($_GET["submit"])){
	$uname = $_GET['username'];
	$pass = $_GET['password'];

	isEmpty($uname,$pass);

	$sql = $con->query("SELECT * FROM user WHERE email='$uname' AND password = '$pass'");

	$res = $sql->fetch_object();

	$count = $sql->num_rows;

	if($count > 0){
		$chasis = $res->chasis_number;
		$username = $res->fname." ".$res->lname;
		$status = $res->role;
		$_SESSION['name'] = $username;
		$_SESSION['chasis'] = $chasis;
		
		if($status == "user"){
			echo "user";
		}

		if($status == "admin"){
			// return header("Location: ../admin/admin.php");
			echo "admin";
		}

	}else {
		echo "Invalid details";
	}
}


//register

if(isset($_GET['registered'])){
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$Cmodal = $_GET['c_modal'];
	$chasis = $_GET['chasis'];
	$Nplate = $_GET['Nplate'];
	$password = $_GET['password'];

	//check if any field is empty

	isEmpty($fname,$lname,$email,$Cmodal,$chasis,$Nplate,$password);

	$reg = $con->query("INSERT INTO user(fname,lname,email,password,car_modal,chasis_number,Nplate) VALUES('$fname','$lname','$email','$password','$Cmodal','$chasis','$Nplate')");

	if($reg){
		$_SESSION['name'] = $fname." ".$lname;
		$_SESSION['chasis'] = $chasis;
		// return header("Location: ../home.php");

		echo "sucess";
	}else {
		echo "failed";
	}
}



// some methods to validate 

function isEmpty(...$args){
	foreach ($args as $k) {
		if(empty($k)){
			echo "All filleds must be filled";
			die();
		}
	}
}

function validate(...$x){
	global $con;
	foreach ($x as $z) {
		# code...
		
	}
}