<?php
	include 'dbcon.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$error = 1;
	
	$stmt = $link->prepare()
	
	if(isset($_POST["news"])){
		$news = 2;
	}
	else{
		$news = 1;
	}
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $fname))	{
		echo "fname er skrevet i forkert format <br />";
		$error = 2;
	}	
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $lname))	{
		echo "lname er skrevet i forkert format <br />";
		$error = 2;
	}	
	
	if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}$/", $email))	{
		echo "email er skrevet i forkert format <br />";
		$error = 2;
	}	
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]* [0-9]{1,30}( ?)[a-zA-ZæøåÆØÅ0-9\.]*$/", $addr))	{
		echo "addr er skrevet i forkert format <br />";
		$error = 2;
	}
	
	if ($error == 2){
		echo "fejl";
		return;
	}
	
	$stmt = $link->prepare("INSERT INTO bruger (fornavn, efternavn, addresse, email, postnr, nyhedsbrev) VALUES (?,?,?,?,?,?)");
	$stmt->bind_param("ssssis", $fname, $lname, $addr, $email, $zip, $news);
	$stmt->execute();
?>