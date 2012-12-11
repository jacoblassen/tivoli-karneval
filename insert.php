<?php
	include 'dbcon.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $fname))	{
		echo "fname er skrevet i forkert format <br />";
		return; //Stop further execution
	}	
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $lname))	{
		echo "lname er skrevet i forkert format <br />";
		return; //Stop further execution
	}	
	
	if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}$/", $email))	{
		echo "email er skrevet i forkert format <br />";
		return; //Stop further execution
	}	
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]* [0-9]{1,30}( ?)[a-zA-ZæøåÆØÅ0-9\.]*$/", $addr))	{
		echo "addr er skrevet i forkert format <br />";
		return; //Stop further execution
	}
	
	$stmt = $link->prepare("INSERT INTO bruger (fornavn, efternavn, addresse, email, postnr) VALUES (?,?,?,?,?)");
	$stmt->bind_param("ssssi", $fname, $lname, $addr, $email, $zip);
	$stmt->execute();
?>