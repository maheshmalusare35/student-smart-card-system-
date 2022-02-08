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
        $profilepicture = $_FILES['profilepicture']['name'];
        $profilepicture_tmp = $_FILES['profilepicture']['tmp_name']; 
        
        	$destinationfile = '../upload/'.$profilepicture;
        
       
             
        $sql="INSERT INTO `register`(`gender`, `date`, `selectyear`, `bloodgroup`, `department`, `address`, `city`, `state`, `pincode`, `profilepicture`) VALUES ('$gender','$date','$selectyear','$bloodgroup','$department','$address','$city','$state','$pincode','$profilepicture')";
        $query = mysqli_query($conn,$sql);
    if(move_uploaded_file($profilepicture_tmp,$destinationfile)
    {
            ?>
                <script>
                    alert("Record insert successfully");
                </script>
            <?php  
            
            ?>
                <script>
                     location.replace("student.php");
                </script>
            <?php
        }
        else
        {              
           ?>
                <script>
                    alert("Failed to insert record");
                </script>
            <?php  
            
            ?>
                <script>
                     location.replace("student.php");
                </script>
            <?php
        }
    
    }
?>