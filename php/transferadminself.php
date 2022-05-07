<?php
session_start();
include("../database/databaseconnection.php");
 
 

if(isset($_POST['submit']))
        {
            // $from_user_id = $_POST['from_user_id'];
            $to_user_id = $_POST['to_user_id'];
            $amount = $_POST['amount'];
            $amount_purpose = $_POST['amount_purpose'];

            // for check the to user id
            
            $query = "SELECT * FROM register WHERE user_id='$to_user_id'";
            $res = mysqli_query($conn,$query);
            $check = mysqli_num_rows($res);


            if($check > 0)
            {
                while ( $row = mysqli_fetch_assoc($res))
                {
                    $balance_to = $row['balance_to'];
                }
            }

                    
                    $sql="INSERT INTO transaction(to_user_id,amount,amount_purpose) VALUES('$to_user_id','$amount','$amount_purpose')";

                    if($conn->query($sql))

                    {       
                        $credit_balance=$balance_to+$amount;
                        // $debite_balance=$balance_to-$amount;    
                        // $result_from = mysqli_query($conn,"UPDATE register SET balance_to =$debite_balance  WHERE user_id='$from_user_id' ");
                        $result_to = mysqli_query($conn,"UPDATE register SET balance_to = $credit_balance  WHERE user_id='$to_user_id' ");
                        ?>
                            <script>
                                alert("Recharge successfully");
                            </script>
                        <?php
                        ?>
                            <script>
                                location.replace("../php/admin.php");
                            </script>
                        <?php
                    }
                    else
                    {                
                        ?>
                            <script>
                                alert("Recharge failed");
                            </script>
                        <?php
                        ?>
                            <script>
                                location.replace("../php/admin.php");
                            </script>
                        <?php
                    }
        }
?>
