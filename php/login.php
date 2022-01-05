<?php 
session_start();
  include("../database/databaseconnection.php");

   
  if (isset($_SESSION['firstname'])) {
    
}
   
   // $output = "";

  if (isset($_POST['submit'])) {
       
       $email = $_POST['email'];
       $role = $_POST['role'];
       $password = $_POST['password'];

       if (empty($email)) {
        
       }else if(empty($role)){

       }else if(empty($pass)){

       }else{

         $query = "SELECT * FROM users WHERE email='$email' AND role='$role' AND password='$password'";
         $res = mysqli_query($connect,$query);

         if ($res->num_rows > 0) 
         {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['firstname'] = $row['firstname'];
            // header("Location: student.php");        
            
         }


         if (mysqli_num_rows($res) == 1)
          {

              if ($role == "Student")
               {
                // $_SESSION['student'] = $row['username'];
                header("Location: student.php");                
              }
              else if($role == "Teacher")
              {                
                // $_SESSION['teacher'] = $row['username'];
                header("Location: teacher.php");
              }
              else if($role == "Admin")
              {                
                // $_SESSION['admin'] = $row['username'];
                header("Location: admin.php");
              }
              else if($role == "Office")
              {               
                // $_SESSION['office'] = $row['username'];
                header("Location: office.php");
              }
              else if($role == "Cafeteria")
              {                
                // $_SESSION['cafeteria'] = $row['username'];
                header("Location: cafeteria.php");
              }
              else if($role == "Library")
              {                
                // $_SESSION['library'] = $row['username'];
                header("Location: library.php");
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




