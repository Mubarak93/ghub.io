<!DOCTYPE html
      PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
  <title>login</title>
</head>
<body>


<?php

$host="mysql-server-1"; // Host name
$user="lb166"; // Mysql username
$pass="abclb166354"; // Mysql password
$db_name="lb166"; // Database name


// Connect to server and select databse.
mysql_connect("$host", "$user", "$pass");
mysql_select_db("$db_name");

// username and password sent from form
$userName=$_POST['username'];
$passWord=$_POST['password'];

echo $userName;
echo "\n";

$query="SELECT * FROM USER WHERE username = '$userName' AND password = '$passWord'";
$result=mysql_query($query);



// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	
	echo "you have successfully logged in.";
	exit();
	
	
}else{
		echo "invalid log in info";
		exit();
		
		}


?>
</body>
</html>


