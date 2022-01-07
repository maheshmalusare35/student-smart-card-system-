<?php 
session_start();
  include("../database/databaseconnection.php");


  if (isset($_POST['submit'])) {
       
       $email = $_POST['email'];
       $role = $_POST['role'];
       $password = $_POST['password'];

       if (empty($email)) {
        
       }else if(empty($role)){

       }else if(empty($password)){

       }else{

            $query = "SELECT * FROM register WHERE email = '".$email."' AND role = '".$role."' AND password = '".$password."'";
         $res = mysqli_query($conn,$query);
         
         $check = mysqli_num_rows($res);

          if($check > 0)
         {
            while ( $row = mysqli_fetch_assoc($res))
             {
                 $_SESSION['firstname'] = $row['firstname'];
            
            }
        }

         if (mysqli_num_rows($res) == 1)
          {
            

              if ($role == "Student")
               {
                // $_SESSION['student'] = $row['username'];
                ?>
           <script>
                location.replace("student.php");
           </script>
                <?php                
              }
              else if($role == "Teacher")
              {                
                // $_SESSION['teacher'] = $row['username'];
                 ?>
           <script>
                location.replace("teacher.php");
           </script>
                <?php
              }
              else if($role == "Admin")
              {                
                // $_SESSION['admin'] = $row['username'];
                header("Location: admin.php");
                ?>
           <script>
                location.replace("admin.php");
           </script>
                <?php
              }
              else if($role == "Office")
              {               
                // $_SESSION['office'] = $row['username'];
                header("Location: office.php");
                ?>
           <script>
                location.replace("office.php");
           </script>
                <?php
              }
              else if($role == "Cafeteria")
              {                
                // $_SESSION['cafeteria'] = $row['username'];
                header("Location: cafeteria.php");
                ?>
           <script>
                location.replace("cafeteria.php");
           </script>
                <?php
              }
              else if($role == "Library")
              {                
                // $_SESSION['library'] = $row['username'];
                
                ?>
           <script>
                location.replace("library.php");
           </script>
                <?php
              }


              echo "<script>alert('You have logged-In Successfully.')</script>";
             // $output .= "you have logged-In";
            }
         
         else
         {
             // $output .= "Failed to login";
            echo "<script>alert('oops! Email or Password is Wrong.')</script>";
         }

       }
  }

 ?>