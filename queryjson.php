
<?php

include "dbconn.php";
if (!$conn)
  {exit("Connection Failed: " . $conn);}


$jo = date('n/j/Y h:i:s A',strtotime('2018-03-01 00:00:01'));
$ji = date('n/j/Y h:i:s A',strtotime('2018-04-21 23:59:59'));

$sql = "SELECT TOP 1000 *,USERINFO.Name from CHECKINOUT inner join USERINFO on CHECKINOUT.USERID = USERINFO.USERID 
WHERE CDate( CHECKINOUT.CHECKTIME ) between '{$jo}' and '{$ji}'
order by CHECKTIME asc";
$rs = odbc_exec($conn,$sql);

if (!$rs)
  {exit("Error in SQL");}




 while (odbc_fetch_row($rs)){
 	echo odbc_result($rs, "CHECKTIME"), "</br>";
 } // while there are rows
 
 
  


odbc_close($conn);
print_r($export);

?>