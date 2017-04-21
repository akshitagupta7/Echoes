<?php
$email=$_POST['email'];
 $hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="subscribe_email";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="INSERT INTO $usertable(email) VALUES('$email')";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
    header('Location:index.html');
     ?>