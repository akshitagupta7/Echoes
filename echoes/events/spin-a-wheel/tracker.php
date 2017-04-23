<?php
$name=$_GET['ref'];
$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="mytestdbms";
	$usertable="refferal";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where name='$name'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
	if(mysql_fetch_assoc($result)){
	$query2="UPDATE $usertable SET count=count+1 WHERE name='$name'";
	$result2 = mysql_query($query2);

	echo $result;
		}
	else{
	$query2="INSERT INTO $usertable(name,count) VALUES('$name','1')";
	$result2 = mysql_query($query2);
	echo $result;

	}
     ?>