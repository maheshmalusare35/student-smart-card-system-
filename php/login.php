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
               $_SESSION['is_expired'] = $row['is_expired'];
               $is_expired = $row['is_expired'];
               $fetch_pass = $row['password'];
          }
     }
     $_SESSION['email'] = $email;


     if (mysqli_num_rows($res) > 0)
          {
               if(password_verify($password,  $fetch_pass))
               {
                   if($is_expired == 1)
                   {
                      if (mysqli_num_rows($res) == 1)
                       {
                           if ($_SESSION['role'] == "Student")
                            {                         
                              ?>
                                   <script>
                                        alert('wow! successfully logged in.')
                                        location.replace("student.php");
                                   </script>
                              <?php                
                            }
                         else if($_SESSION['role'] == "Teacher")
                         {                
                              ?>
                                   <script>
                                    alert('wow! successfully logged in.')
                                        location.replace("teacher.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Admin")
                         {  
                              ?>
                                   <script>
                                    alert('wow! successfully logged in.')
                                        location.replace("admin.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Office")
                         { 
                              ?>
                                   <script>
                                    alert('wow! successfully logged in.')
                                        location.replace("office.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Cafeteria")
                         {
                              ?>
                                   <script>
                                    alert('wow! successfully logged in.')
                                        location.replace("cafeteria.php");
                                   </script>
                              <?php
                         }
                         else if($_SESSION['role'] == "Library")
                         { 
                              ?>
                                   <script>
                                    alert('wow! successfully logged in.')
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
                                   <script>alert('oops! Please verify your email.')
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