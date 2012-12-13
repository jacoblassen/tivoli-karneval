<?php
    $link = new mysqli("localhost", "root", "", "karneval");
	if($link->connect_error)	{
		die('Connect Error('.$link->connect_errno.') '.$link->connect_error);
	}
	$link->set_charset("utf8")
?>