<?php
$servername = 'localhost';
$username = 'id18290741_student_data';
$password = 'Elibrary@2022';
$database_name = 'id18290741_root';  //give the database name


$conn = mysqli_connect($servername ,$username, $password, $database_name);
if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
?>