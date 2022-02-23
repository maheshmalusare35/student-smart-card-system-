<?php
  session_start();
  include '../database/databaseconnection.php';
  
  $email=$_SESSION['email'];

$query = "SELECT * FROM register WHERE email='$email'";
  $res = mysqli_query($conn,$query);
  $check = mysqli_num_rows($res);


  if($check > 0)
    {
        while ( $row = mysqli_fetch_assoc($res))
        {
            $email = $row['email'];
        }
    }

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
        $filename = $_FILES['profilepicture']['name'];

        $tempname = $_FILES['profilepicture']['tmp_name'];  
    
            $folder = "../upload/".$filename; 


        $sql="INSERT INTO register(email,gender,date,bloodgroup,department,address,city,state,pincode,profilepicture) VALUES('$email','$gender','$date','$bloodgroup','$department','$address','$city','$state','$pincode','$filename')";

       
        if(mysqli_query($conn,$sql)) 
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