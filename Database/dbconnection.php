<?php
$host = 'localhost';
$dbname = 'intrack';
$username = 'root';
$password = ''; 

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    echo "Connection Failed";
}else{
    echo "Connection Successful";
}
?>