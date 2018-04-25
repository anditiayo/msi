<?php
//menggunakan 2 database
$db = mysqli_connect('localhost', 'root', 'toor', 'ci_fp');
$conn= odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\ab.mdb", "", "");
if (mysqli_connect_errno($db))
  {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  	
	$get_name 	= mysqli_query($db,"SELECT code,name FROM employee");
	while ($row = mysqli_fetch_assoc($get_name))
	{
		$name = $row['name'];
		$code = $row['code'];
		
		//ambil data yang ada di absf01 untuk di bandingkan dengan data mysql
		$get_kar = "SELECT * from ABSF01 where karyawan = '$code'";
		$result = odbc_exec($conn,$get_kar) or die (odbc_errormsg()); 
		$karyawan = odbc_result($result, "karyawan");
		
		//bandingkan dengan data mysql dan mdb
		if($karyawan != $code){
			//insert into ab.mdb (master employee)
			$sql="INSERT INTO ABSF01 (karyawan,nama,dep,ndep,grp_jadwal,ID) VALUES ('$code','$name','015','ADMINISTRASI UMUM STAFF','A8','$code')";
			$rs = odbc_exec($conn,$sql) or die (odbc_errormsg()); 
			if (!$rs)
			{
				exit("Error in SQL");
			}
			else echo $code.'</br>';	
			
		}
	}
mysqli_close($db);
?>