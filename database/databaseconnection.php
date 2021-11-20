<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database_name = 'register_student_smart_card';  //give the database name


$conn = mysqli_connect($servername ,$username, $password, $database_name);

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