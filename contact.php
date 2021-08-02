<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'contact');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if(mysqli_connect_errno($link)){
	echo 'Failed to connect to database:'.mysqli_connect_error;
  }else {
    echo'connected';
  }

$name=($_POST["name"]);
$email=($_POST["email"]);
$phone=($_POST["phone"]);
$message=($_POST["message"]);
mysqli_query($link,"INSERT INTO users(name,email,phone,message) VALUES('$name,'$email','$phone','$message')");
echo count($name);
?>