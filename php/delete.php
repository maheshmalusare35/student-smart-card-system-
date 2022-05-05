<?php
include("../database/databaseconnection.php");
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];

 $sql= "DELETE FROM register WHERE user_id='$user_id'";
if ($conn->query($sql)) 
{
    ?>
        <script>
            alert("Record delete successfully");
        </script>
    <?php
    ?>
        <script>
            location.replace("admin.php");
        </script>
    <?php
}
else{
    
    ?>
        <script>
            alert("Record not delete successfully");
        </script>
    <?php
    ?>
        <script>
            location.replace("admin.php");
        </script>
    <?php
}
}

?>