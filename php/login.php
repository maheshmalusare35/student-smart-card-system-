<?php 
session_start();
include("../database/databaseconnection.php");


if (isset($_POST['submit'])) 
{

     $email = $_POST['email'];
     $role = $_POST['role'];
     $password = $_POST['password'];

     $query = "SELECT * FROM register WHERE email='$email' AND role='$role'";
     $res = mysqli_query($conn,$query);
     $check = mysqli_num_rows($res);


     if($check > 0)
     {
          while ( $row = mysqli_fetch_assoc($res))
          {
               $_SESSION['firstname'] = $row['firstname'];
               $_SESSION['role'] = $row['role'];
               $fetch_pass = $row['password'];
          }
     }
           

     if (mysqli_num_rows($res) > 0)
          {
              if(password_verify($password,  $fetch_pass))
                {
                    if (mysqli_num_rows($res) == 1)
                    {
                         if ($_SESSION['role'] == "Student")
                         {                         
                              ?>
                                   <script>
                                        location.replace("student.php");
                                   </script>
                              <?php                
                         }
                         else if($_SESSION['role'] == "Teacher")
                         {                
                              ?>
                                   <script>
                                        location.replace("teacher.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Admin")
                         {  
                              ?>
                                   <script>
                                        location.replace("admin.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Office")
                         { 
                              ?>
                                   <script>
                                        location.replace("office.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Cafeteria")
                         {
                              ?>
                                   <script>
                                        location.replace("cafeteria.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Library")
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