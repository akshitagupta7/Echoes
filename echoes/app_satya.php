<?php
$num=$_GET['number'];
$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where phone='$num'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
     $row=mysql_fetch_assoc($result);
     echo json_encode($row);
     ?>