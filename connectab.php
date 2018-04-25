<html>
<body>
<?php

 $conn= odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\Ab.mdb", "", "");
if (!$conn)
  {exit("Connection Failed: " . $conn);}

$jo = date('Y-m-j h:i:s',strtotime('2018-03-01 00:00:01'));
$ji = date('Y',strtotime('2018-03-31 23:59:59'));

//$sql2 = "DELETE FROM ABSINOUT ";

$sql = "SELECT TOP 500 * from ABSINOUT order by DATE DESC";

//$rs2 = odbc_exec($conn,$sql2)or die (odbc_errormsg()); 
$rs = odbc_exec($conn,$sql)or die (odbc_errormsg()); 

//if (!$rs2)
  //{exit("Error in SQL");}
if (!$rs)
  {exit("Error in SQL");}

echo "<table BORDER='1'>";
echo "<th>NO</th>";
echo "<th>EMPLOYEE CODE</th>";
echo "<th>ID</th>";
echo "<th>DATE</th>";
echo "<th>DAY</th>";
echo "<th>TIME</th>";
echo "<th>MESIN</th>";
echo "<th>STATUS</th>";
echo "<th>POSTED</th>";
echo "<th>FROMDATE</th>";
  $count = 1;
  while (odbc_fetch_row($rs)) // while there are rows
  {
     echo "<tr>";
        echo "<td>" . $count. "</td>";
        echo "<td>" . odbc_result($rs, 1) . "</td>";
        echo "<td>" . odbc_result($rs, 2) . "</td>";
        echo "<td>" . odbc_result($rs, 3) . "</td>";
        echo "<td>" . odbc_result($rs, 4) . "</td>";
        echo "<td>" . odbc_result($rs, 5) . "</td>";
        echo "<td>" . odbc_result($rs, 6) . "</td>";
		echo "<td>" . odbc_result($rs, 7) . "</td>";
		echo "<td>" . odbc_result($rs, 8) . "</td>";
		echo "<td>" . odbc_result($rs, 9) . "</td>";
		echo "<td>" . odbc_result($rs, 10) . "</td>";
		echo "<td>" . odbc_result($rs, 11) . "</td>";
		echo "<td>" . odbc_result($rs, 12) . "</td>";
		echo "<td>" . odbc_result($rs, 13) . "</td>";
		echo "<td>" . odbc_result($rs, 14) . "</td>";
		echo "<td>" . odbc_result($rs, 15) . "</td>";
		echo "<td>" . odbc_result($rs, 16) . "</td>";
		echo "<td>" . odbc_result($rs, 17) . "</td>";
        
     $count++;
  }
odbc_close($conn);
echo "</table>";
?>
</body>
</html>