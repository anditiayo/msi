<?php
	 $conn= odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\ab.mdb", "", "");
?>
<table>
	<form name="myForm" id="myForm" action="submit.php" method="post" enctype="multipart/form-data">
		<td>EMPCODE</td></td>
		<td>
			<?php 
				$sql="SELECT * FROM ABSF01 ORDER by KARYAWAN ASC";
				$rs = odbc_exec($conn,$sql);
				if (!$rs){exit("Error in SQL");}
			 ?>
			 <select name="empcode">
			 		<?php 
		 				while (odbc_fetch_row($rs)) // while there are rows
						  {
						    	echo "<option value='".odbc_result($rs, 1)."'>";
						        echo odbc_result($rs, 1).' '.odbc_result($rs, 2);
						        echo "</option>";
						  }
						odbc_close($conn);
			 		 ?>
			 </select>
		</td>
	</tr>
	<tr>
		<td>DATE</td></td>
		<td><input type="date" name="date"></td>
	</tr>
	<tr>
		<td>TIME</td></td>
		<td><input type="time" name="time"></td>
	</tr>
	<tr>
		<td>STATUS</td></td>
		<td>
			<select name="status">
				<option value="1">Masuk</option>
				<option value="4">Keluar</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit">SUBMIT</button></td>
	</tr>
	</form>
</table>