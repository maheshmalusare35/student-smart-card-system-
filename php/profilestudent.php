<?php
    include '../database/databaseconnection.php';

    if(isset($_POST['submit']))
    {
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $selectyear = $_POST['selectyear'];
        $bloodgroup = $_POST['bloodgroup'];
        $department = $_POST['department'];
        $address = $_POST['address'];        
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $profilepicture = $_FILES['profilepicture'];  
        

        $sql="INSERT INTO register(gender,date,selectyear,bloodgroup,department,address,city,state,pincode,profilepicture) VALUES('$gender','$date','$selectyear','$bloodgroup','$department','$address','$city','$state','$pincode','$profilepicture')";

        if($conn->query($sql))
        {
            ?>
                <script>
                    alert("Record insert successfully");
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
        }
    }
?>