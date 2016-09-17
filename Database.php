<?php
$username="mysql";
$password="senha123";
$database="mysql";
$nome=$_POST['Value1'];
$ip=$_POST['Value2'];
$data=$_POST['1970-01-01 00:00:01'];
$id=$_POST[1];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO tablename VALUES('','$nome','$ip',
'$data','$id')";
mysql_query($query);
mysql_close();
?>