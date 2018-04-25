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
				<h2>Get Log Mesin to MDB</h2>
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

				$Connect = fsockopen($IP, "80", $errno, $errstr, 1);
				if ($Connect) 
				{
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
				  while($Response = fgets($Connect, 1024)) 
				  {
					$buffer = $buffer.$Response;
				  }
				} else echo "Koneksi Gagal";

				$buffer = Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
				$buffer = explode("\r\n",$buffer);

				$conn	= odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\Ab1.mdb", "", "");
				$get_kar 	= "SELECT * from ABSF01 where karyawan = '$PIN'";
				 $result 	= odbc_exec($conn,$get_kar) or die (odbc_errormsg()); 

				for($a=1;$a<count($buffer);$a++)
				{
				  $data     = Parse_Data($buffer[$a],"<Row>","</Row>");
				  $PIN      = Parse_Data($data,"<PIN>","</PIN>");
				  $DateTime = Parse_Data($data,"<DateTime>","</DateTime>");
				  $Verified = Parse_Data($data,"<Verified>","</Verified>");
				  $Status   = Parse_Data($data,"<Status>","</Status>");

				  $time     = date('H:i',strtotime($DateTime));
				  $date     = date('Y-m-j',strtotime($DateTime));

				  if($Status == 0)
				  {
					  $status1 = 1;
				  }
				  else
				  {
					  $status1 = 4;
				  }
				  $day 		= date('w',strtotime($DateTime));
				  $get_kar 	= "SELECT * from ABSF01 where karyawan = '$PIN'";
				  $result 	= odbc_exec($conn,$get_kar) or die (odbc_errormsg()); 
				  $karyawan = odbc_result($result, "karyawan");	
					if($PIN == $karyawan)
					{
						$get_true 	= odbc_exec($conn,"SELECT posted FROM ABSINOUT where ID = '$PIN' and date = '$date' and time = '$time' ");
						$posted 	= odbc_result($result, "posted");
			
						
						$sql      	= "INSERT INTO ABSINOUT VALUES ('$PIN','$PIN','$date','$day','$time','1','$status1','0','$date')";
						$rs = odbc_exec($conn,$sql) or die (odbc_errormsg()); 
						if (!$rs)
						{
							exit("Error in SQL".$sql);
						}
						else
						{
							//echo "Complete [".$PIN."] == [".$date."]</br>";
						}
						
					}
					else echo "Tidak Ada ".$PIN."</br>";
					
					$percent = intval($a/(count($buffer)-2) * 100)."%";
					
					// Javascript for updating the progress bar and information
					echo '<script language="javascript">
					document.getElementById("progress").innerHTML="<div  style=\"width:'.$percent.';background-color:#4CAF50; color:white;font-size:15px;text-align:center;\">'.$percent.'</div>";
					document.getElementById("information").innerHTML="'.($a).' row(s) processed from '.(count($buffer)-2).' row(s).";
					</script>';          
				}
					echo '<script language="javascript">document.getElementById("information").innerHTML="'.($DateTime).' Process completed"</script>';
				?>
		</div>
	</body>
</html>