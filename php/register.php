<?php
        include '../database/databaseconnection.php';

        if(isset($_POST['submit']))
        {
          $firstname = $_POST['firstname'];
          $middlename = $_POST['middlename'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $role = $_POST['role'];        
          $password = ($_POST['password']);
          $encpass = password_hash($password, PASSWORD_BCRYPT);




         $query= mysqli_query($conn,"SELECT * FROM register WHERE email='$email'");
        if (mysqli_num_rows($query)>0) 
        {
            ?>
              <script >
                        alert("Email is already use....");
              </script>
            <?php
                      ?>
                      <script >
                        location.replace("../register.html");
                      </script>
                      <?php
        }
        else
        {

        $query= mysqli_query($conn,"SELECT * FROM register WHERE phone='$phone'");
        if (mysqli_num_rows($query)>0) 
        {
                       ?>
                       <script >
                       alert("contact no is already use....");
                       </script>
                       <?php
                        ?>
                        <script >
                          location.replace("../register.html");
                         </script>
                         <?php
        }
        else{

            

            $sql="INSERT INTO register(firstname,middlename,lastname,email,phone,role,password) VALUES('$firstname','$middlename','$lastname','$email','$phone','$role','$encpass')";

            if($conn->query($sql))

            {
                ?>
                  <script >
                        alert("Record insert successfully");
                  </script>
                <?php
                ?>
                  <script >
                        location.replace("../register.html");
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
                          location.replace("../register.html");
                         </script>
                         <?php
                       
            }
        }
    }
        }
?>