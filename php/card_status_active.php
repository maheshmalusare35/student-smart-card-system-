<?php
include("../database/databaseconnection.php");
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $card_status = $_POST['card_status'];

    $sql="UPDATE register SET card_status =$card_status  WHERE user_id='$user_id' ";
if ($conn->query($sql)) 
{
    ?>
        <script>
            alert("Card Status Update successfully");
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
            alert("Card Status Not Update successfully");
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