<?php
	include 'dbcon.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$error = 1;
	$sender = "karneval@tivoli.dk";
	
	//$query = "SELECT email, addresse FROM bruger WHERE email = '".$email."' OR addresse = '".$addr."'";
	//$result = $link->query($query);
		//while($row = $result->fetch_assoc()){
			//if($row['email'] == $email){
				//$error = 2;
				//echo $row['email']."<br />".$email;
				//echo "e-mailen findes";
				//return;
			//}
			//if($row['addresse'] == $addr){
				//$error = 2;
				//echo "addressen er allerede registreret";
				//return;
			//}
		//}
		
	$query = "SELECT zip FROM zip WHERE zip = ?";
	$stmt = $link->prepare($query);
	$stmt->bind_param('i', $zip);
	$stmt->execute();
	
	$stmt->bind_result($rowCount);
	$stmt->fetch();
	$stmt->close();
	
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
	
	if (!preg_match("/^\w+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}$/", $email))	{
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
	
	$headers = "From: " . $sender . "\r\n";
	$headers .= "Reply-To: ". $sender . "\r\n";
	$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message = '<html>
  	<body bgcolor="#DCEEFC">
   		<center>
	        <b>Looool!!! I am reciving HTML email......</b> <br>
	        <font color="red">Thanks Mohammed!</font> <br>
	        <a href="http://www.maaking.com/">* maaking.com</a>
	    	</center>
	      <br><br>*** Now you Can send HTML Email <br> Regards<br>MOhammed Ahmed - Palestine
	  </body>
	</html>';

	//mail($email, "Karneval i Tivoli", "$message", "$headers");
?>