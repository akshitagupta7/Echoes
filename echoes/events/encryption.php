<?php
if(isset($_POST['name'])&&isset($_POST['number'])){
$name=$_POST['name'];
$num=$_POST['number'];
$hostname="localhost";
	$username="echoes";
	$password="stargazer";
	$dbname="echoes_satya";
	$usertable="people_spinner";
	
	 mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	 $number=rand(0,100);
	 if($number<100){
	 //5 percent probability
	 $prize=4;
	 }
	 if($number<95)  {
	  //5 percent probability
	 $prize=1;
	 }
	 if($number<90){
	 //another 30 percent
	 $prize=2;
	 }
	 if($number<60){
	 //50 percent
	 $prize=3;
	 }
	 if($number<10){
	 //10 percent
	 $prize=5;
	 }
	 $query="INSERT INTO $usertable(name,phone,prize) VALUES('$name','$num','$prize')";
	 $query2="SELECT * FROM $usertable WHERE phone='$num'";
	 mysql_select_db($dbname);   
 	$result2=mysql_query($query2);
 	if($result2 && mysql_num_rows($result2) > 0){
		header('Location: http://echoes.stargazer.co.in/events/waffle.php?tag=fail'); 	
		}
 	else{
 	$result = mysql_query($query);
	 session_start();
	 $_SESSION["name"] = $name;
	 $_SESSION["number"]=$num;
	
	     header('Location: wheel.php');
	     }

	
}
