<?php
$num=$_GET['number'];
$branch=$_GET['branch'];

$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname=$branch;
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
 $query="UPDATE $usertable SET redemption=1 where phone='$num'";
	 mysql_select_db($dbname);
     echo $result = mysql_query($query);
    
?>