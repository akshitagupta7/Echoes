<?php
$num=$_GET['number'];
$branch=$_GET['branch'];

$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname=$branch;
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $query="SELECT * FROM $usertable where phone='$num'";
	 mysql_select_db($dbname);
     $result = mysql_query($query);
     $row=mysql_fetch_assoc($result);
     $date=$row['DATE(TIMESTAMP)'];
  	$newdate= date('Y-m-d', strtotime($date. ' + 89 days'));
	$formatdate = date("d-m-Y", strtotime($newdate));
	$row['TIMESTAMP']=$formatdate;
	
echo json_encode($row);
?>