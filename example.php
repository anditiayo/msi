<?php

include 'class_mdb.php'; 

$mdb = new mdb('ab.mdb'); // your own mdb filename required 
$mdb->execute('select * from table'); // your own table in the mdb file 

# 
# first example: using fieldnames 
#  

while( !$mdb->eof() ) 
{ 
  echo $mdb->fieldvalue('description'); // using your own fields name 
  echo ' = '; 
  echo $mdb->fieldvalue( 1 ); // using the fields fieldnumber 
  echo '<br>'; 
  $mdb->movenext(); 
} 

echo '<br><hr><br>'; 

# 
# Going back to the first recordset for the second example 
# 
$mdb->movefirst(); 

# 
# This works, too: Make each Field an object. The values change 
# when the data pointer advances with movenext(). 
#  
$url = $mdb->RS->Fields(1); 
$bez = $mdb->RS->Fields(2); 
$kat = $mdb->RS->Fields(3); 

while( !$mdb->eof() ) 
{ 
  # works! 
  echo $bez->value; 
  echo ' = '; 
  echo $url->value; 
  echo '<br>'; 
  $mdb->movenext();  
} 

$mdb->close();

?>