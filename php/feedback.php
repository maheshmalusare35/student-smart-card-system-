<?php

        include '../database/databaseconnection.php';

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];            
            $email = $_POST['email'];
            $comments = $_POST['comments'];        


            $sql="INSERT INTO feedback(name,email,comments) VALUES('$name','$email','$comments')";

            if($conn->query($sql))

            {
                ?>
                    <script>
                        alert("Record insert successfully");
                    </script>
                <?php
                ?>
                    <script>
                        location.replace("../index.html");
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
                        location.replace("../index.html");
                    </script>
                <?php
            }
        }
    

?>