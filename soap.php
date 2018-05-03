<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <style type="text/css">
      
      .progress{
        width: 500px;
      }
      #progress{
        background-color: #ccc;
      }
      #percent{
        font-size: 20px;
        color: white;

      }
  </style>

</head>
<body>

<div class="container">
  <h2>Get Log Mesin to MySql</h2>
    <div class="progress">
      <div  id="progress" style="width:500px;border:1px solid #ccc;"></div>
    </div>
      <!-- Progress information -->
    <div id="information" style="width"></div>
<?php
include("parse.php");

date_default_timezone_set('Asia/Jakarta');
$IP     = "192.168.1.201";
$Key    = "0";
$date   = date("Y-m-d h:i:s" );

$Connect = fsockopen($IP, "80", $errno, $errstr, 1);
if ($Connect) {
  $soap_request = "
  <GetAttLog>
    <ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey>
    <Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg>
  </GetAttLog>";

  $newLine  = "\r\n";
  fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
  fputs($Connect, "Content-Type: text/xml".$newLine);
  fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
  fputs($Connect, $soap_request.$newLine);
  $buffer   = "";
  while($Response = fgets($Connect, 1024)) {
    $buffer = $buffer.$Response;
  }
} else echo "Koneksi Gagal";

$buffer = Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
$buffer = explode("\r\n",$buffer);

$db = mysqli_connect('localhost', 'root', 'toor', 'smarthr');

for($a=1;$a<count($buffer)-1;$a++){

  $data     = Parse_Data($buffer[$a],"<Row>","</Row>");
  $PIN      = Parse_Data($data,"<PIN>","</PIN>");
  $DateTime = Parse_Data($data,"<DateTime>","</DateTime>");
  $Verified = Parse_Data($data,"<Verified>","</Verified>");
  $Status   = Parse_Data($data,"<Status>","</Status>");
  $name     = Parse_Data($data,"<Name>","</Name>");
  $time     = date('H:i:s',strtotime($DateTime));
  $date     = date('Y-m-j',strtotime($DateTime));
  $day 		= date('w',strtotime($DateTime));
			/* $sql = "INSERT INTO data_absen (pin, date_time,tgl,waktu,day, ver,status) 
			Values ('$PIN', '$DateTime','$date','$time','$day','$Verified','$Status')"; */
			
          $sql      = "INSERT INTO msi_log_data (pin, date_time,tgl,waktu,day, ver,status)
                            SELECT '$PIN', '$DateTime','$date','$time','$day','$Verified','$Status'
                            FROM msi_log_data
                            WHERE NOT EXISTS(
                                SELECT pin, date_time,ver,status
                                FROM msi_log_data
                                WHERE pin = '$PIN'
                                  AND date_time = '$DateTime'
                                  AND ver = '$Verified'
                                  AND status = '$Status'
                            )LIMIT 1";
          if($PIN != 0)
		  {
            if (mysqli_query($db, $sql))
			{
              //echo "Complete [".$PIN."] == [".$date."]</br>";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          }
		      if(isset($PIN)!=NULL || isset($PIN)!=''){
             $percent = intval($a/(count($buffer)-2) * 100)."%";
          }
		     // echo $a.'-'.count($buffer).'-'. $PIN .'</br>';
         
    
    // Javascript for updating the progress bar and information
    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div  style=\"width:'.$percent.';background-color:#4CAF50; color:white;font-size:15px;text-align:center;\">'.$percent.'</div>";
    document.getElementById("information").innerHTML="'.($a).' row(s) processed from '.(count($buffer)-2).' row(s).";
    </script>';    
    $last = (count($buffer)-2);      
}
echo '<script language="javascript">document.getElementById("information").innerHTML=" Process completed '.$last .' row(s)"</script>';



?>
</div>
</body>
</html>