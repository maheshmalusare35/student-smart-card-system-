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
        $selectyear = $_POST['selectyear'];
        $bloodgroup = $_POST['bloodgroup'];
        $department = $_POST['department'];
        $address = $_POST['address'];        
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $filename = $_FILES['profilepicture']['name'];

    $tempname = $_FILES['profilepicture']['tmp_name']; 
    // $filetmp =$filename['tmp_name']; 

        $folder = '../upload/'.$filename;  
        move_uploaded_file($tempname, $folder); 
        
        // $sql="INSERT INTO profile(email,gender,date,selectyear,bloodgroup,department,address,city,state,pincode,profilepicture) VALUES ('$email','$gender','$date','$selectyear','$bloodgroup','$department','$address','$city','$state','$pincode','$filename')";

        $sql = "UPDATE register SET gender='$gender', date='$date', selectyear='$selectyear',bloodgroup='$bloodgroup', department='$department', address='$address', city='$city', state='$state', pincode='$pincode', profilepicture='$folder' WHERE email='$email' ";
       
     if(mysqli_query($conn,$sql)) 
    
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