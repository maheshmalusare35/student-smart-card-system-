<?php
    include '../database/databaseconnection.php';

    if(isset($_POST['submit']))
    {
        $gender = $_POST['gender'];
        $date = $_POST['date'];      
        $bloodgroup = $_POST['bloodgroup'];
        $department = $_POST['department'];
        $address = $_POST['address'];        
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $filename = $_FILES['$profilepicture']['name'];

        $tempname = $_FILES['$profilepicture']['tmp_name'];  
    
            $folder = "../upload/".$filename;  


        $sql="INSERT INTO register(gender,date,bloodgroup,department,address,city,state,pincode,profilepicture) VALUES('$gender','$date','$bloodgroup','$department','$address','$city','$state','$pincode','$filename')";

        if($conn->query($sql))
        {
            ?>
                <script>
                    alert("Record insert successfully");
                </script>
            <?php
            ?>
            <script>
                location.replace("teacher.php");
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
                    location.replace("teacher.php");
                </script>
            <?php             
        }
    }
?>