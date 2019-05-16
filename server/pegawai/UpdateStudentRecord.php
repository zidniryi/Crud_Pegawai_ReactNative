<?php
 
// Importing DBConfig.php file.
include 'DBConfig.php';
 
// Connecting to MySQL Database.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 
 // Populate pegawai ID from JSON $obj array and store into $S_Name.
 $S_ID = $obj['pegawai_id'];
 
 // Populate pegawai name from JSON $obj array and store into $S_Name.
 $S_Nama = $obj['pegawai_nama'];
 
 // Populate pegawai from JSON $obj array and store into $S_Class.
 $S_Gaji = $obj['pegawai_gaji'];

 
 // Creating SQL query and insert the record into MySQL database table.
 $Sql_Query = "UPDATE pegawai SET pegawai_nama= '$S_Nama', pegawai_gaji = '$S_Gaji' WHERE pegawai_id = $S_ID";
 
 if(mysqli_query($con,$Sql_Query)){
 
 // If the record inserted successfully then show the message.
$MSG = 'Record Successfully Inserted Into MySQL Database.' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);

// Echo the message.
 echo $json ;
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>