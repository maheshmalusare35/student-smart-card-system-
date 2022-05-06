<?php
session_start();
include("../database/databaseconnection.php");

if(isset($_POST['submit']))
        {
            $from_user_id = $_POST['from_user_id'];
            $to_user_id = $_POST['to_user_id'];
            $amount = $_POST['amount'];
            $amount_purpose = $_POST['amount_purpose'];


            $sql="INSERT INTO transaction(from_user_id,to_user_id,amount,amount_purpose) VALUES('$from_user_id','$to_user_id','$amount','$amount_purpose')";

            if($conn->query($sql))

            {           
                ?>
                    <script>
                        alert("Record insert successfully");
                    </script>
                <?php
                ?>
                    <script>
                        location.replace("office.php");
                    </script>
                <?php
            }
            else
            {                
                ?>
                    <script>
                        alert("Record insert failed");
                    </script>
                <?php
                ?>
                    <script>
                        location.replace("office.php");
                    </script>
                <?php
            }
        }

?>