<?php
        include '../database/databaseconnection.php';

        if(isset($_POST['submit']))
        {
         $firstname=$_POST['firstname'];
         $middlename=$_POST['middlename'];
         $lastname=$_POST['lastname'];
         $email=$_POST['email'];
         $phone=$_POST['phone'];
         $gender=$_POST['gender'];
         $date=$_POST['date'];
         $pass=$_POST['pass'];
         $year=$_POST['year'];



         $query= mysqli_query($conn,"SELECT * FROM parents WHERE email='$email'");
        if (mysqli_num_rows($query)>0) 
        {
                       ?>
                       <script >
                       alert("Email is already use....");
                       </script>
                       <?php
                      ?>
                      <script >
                        location.replace("../registerparent.html");
                       </script>
                       <?php
        }
        else
        {

        $query= mysqli_query($conn,"SELECT * FROM parents WHERE phoneno='$phoneno'");
        if (mysqli_num_rows($query)>0) 
        {
                       ?>
                       <script >
                       alert("Phoneno is already use....");
                       </script>
                       <?php
                        ?>
                        <script >
                          location.replace("../registerparent.html");
                         </script>
                         <?php
        }
        else{



            $sql = mysqli_query($conn,"INSERT INTO parents VALUES('$firstname','$middlename','$lastname','$email','$phone','$gender','$date','$pass','$year')");

            if($sql)
            {
                ?>
                       <script >
                       alert("Record insert successfully");
                       </script>
                       <?php
                       ?>
                       <script >
                         location.replace("../registerparent.html");
                        </script>
                        <?php
            }
            else
            {
                ?>
                       <script >
                       alert("Record insert failed");
                       </script>
                       <?php
                        ?>
                        <script >
                          location.replace("../registerparent.html");
                         </script>
                         <?php
                       
            }
        }
    }
        }
?>