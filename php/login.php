<?php 
session_start();
include("../database/databaseconnection.php");


if (isset($_POST['submit'])) 
{

     $email = $_POST['email'];
     $role = $_POST['role'];
     $password = $_POST['password'];

     $query = "SELECT * FROM register WHERE email = '$email' ";
     $res = mysqli_query($conn,$query);
     $check = mysqli_num_rows($res);


     if($check > 0)
     {
          while ( $row = mysqli_fetch_assoc($res))
          {
               $_SESSION['firstname'] = $row['firstname'];
               $fetch_pass = $row['password'];
          }
     }


     if (mysqli_num_rows($res) > 0)
          {
          if(password_verify($password,  $fetch_pass))
               {
                    if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM register WHERE role = '$role'  ")) > 0)
                    {
                         if ($role == "Student")
                         {                         
                              ?>
                                   <script>
                                        location.replace("student.php");
                                   </script>
                              <?php                
                         }
                         else if($role == "Teacher")
                         {                
                              ?>
                                   <script>
                                        location.replace("teacher.php");
                                   </script>
                              <?php
                         }
                         else if($role == "Admin")
                         {  
                              ?>
                                   <script>
                                        location.replace("admin.php");
                                   </script>
                              <?php
                         }
                         else if($role == "Office")
                         { 
                              ?>
                                   <script>
                                        location.replace("office.php");
                                   </script>
                              <?php
                         }
                         else if($role == "Cafeteria")
                         {
                              ?>
                                   <script>
                                        location.replace("cafeteria.php");
                                   </script>
                              <?php
                         }
                         else if($role == "Library")
                         { 
                              ?>
                                   <script>
                                        location.replace("library.php");
                                   </script>
                              <?php
                         }
                    }
                         else
                         {
                              ?>
                                   <script>alert('oops! Select User Wrong.')
                                        location.replace("../login.html");
                                   </script>                              
                              <?php
                         }                         
               }
               else
               {
                    ?>
                         <script>alert('oops! Password Wrong.')
                              location.replace("../login.html");
                         </script>
                    <?php
               }
          }
          else
          {
               ?>
                    <script>alert('oops! Email Wrong.')
                    location.replace("../login.html");
                    </script>
                    
               <?php
          }
}
?>