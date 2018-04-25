

<html>
<body>
<?php

include "dbconn.php";
if (!$conn)
  {exit("Connection Failed: " . $conn);}

$jo = date('n/j/Y h:i:s A',strtotime('2018-03-01 00:00:01'));
$ji = date('n/j/Y h:i:s A',strtotime('2018-04-21 23:59:59'));

$sql = "SELECT TOP 1000 *,USERINFO.Name from CHECKINOUT inner join USERINFO on CHECKINOUT.USERID = USERINFO.USERID 
WHERE CDate( CHECKINOUT.CHECKTIME ) between '{$jo}' and '{$ji}'
order by CHECKTIME DESC";
$rs = odbc_exec($conn,$sql);
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
        echo "<td>" . odbc_result($rs, "USERID") . "</td>";
        echo "<td>" . odbc_result($rs, "USERID") . "</td>";
        echo "<td>" . odbc_result($rs, "CHECKTIME") . "</td>";
        echo "<td> NULL </td>";
        echo "<td>"; 
        $time = odbc_result($rs, "CHECKTIME"); 
        echo date('H:i:s',strtotime($time));
        echo "</td>";
        echo "<td> NULL </td>";
        echo "<td>" ; 
        if( odbc_result($rs, 3) == "I" ){
          echo "1";
        } else{
          echo "4";
        }
        echo "</td>";
        echo "<td>" . odbc_result($rs, "SN") . "</td>";
        echo "<td>" . odbc_result($rs, "CHECKTIME") . "</td>";
     echo "</tr>";
     $count++;
  }
odbc_close($conn);
echo "</table>";
?>
</body>
</html>