<?php

 $conn= odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\ab.mdb", "", "");

$empcode 	= $_POST['empcode'];
$date 		= $_POST['date'];
$time 		= $_POST['time'];
$status 	= $_POST['status'];


$sql="INSERT INTO ABSINOUT VALUES ('2105','2105','$date','4','$time','4','$status','4','$date')";

$rs = odbc_exec($conn,$sql) or die (odbc_errormsg()); 
var_dump($sql);

if (!$rs)
  {exit("Error in SQL");}else{
  	exit("Success");	
  }

?>