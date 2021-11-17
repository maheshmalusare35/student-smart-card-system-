<?php

$username = 'root';
$password = '';
$database_name = '';  //give the database name


$conn = new mysqli('localhost' ,$username, $password, $database_name);

 if($conn)
  {
    ?>
    <script >
      alert("Connection succesfully");
    </script>
    <?php
  }
  else
  {
    ?>
    <script >
      alert("No Connection");
    </script>
    <?php
  }


 
?>