<?php
include 'database/databaseconnection.php';


$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$pass=$_POST['pass'];
$year=$_POST['year'];

// $query= mysqli_query($conn,"SELECT * FROM register WHERE username='$username'");
// if (mysqli_num_rows($query)>0) 
// {
//                ?>
//                <script >
//                alert("Username is already use....");
//                </script>
//                <?php
//                ?>
//               <script >
//                 location.replace("registerstudent.php");
//                </script>
//                <?php
// }
// else
// {

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
                location.replace("registerstudent.php");
               </script>
               <?php
}
else
{

  $query= mysqli_query($conn,"SELECT * FROM register WHERE phoneno='$phoneno'");
    if (mysqli_num_rows($query)>0) 
       {
         ?>
               <script >
               alert("Phoneno is already use....");
               </script>
        <?php
        ?>
              <script >
                location.replace("registerstudent.php");
               </script>
         <?php
       }
     else
    {



         $sql="insert into register(firstname,middlename,lastname,email,phone,gender,date,pass,year) values('$firstname','$middlename','$laststname','$email','$phone','$gender','$date','$pass','year')";

           if($conn->query($sql))
                {
  	                ?>
  	                    <script >
  		                  alert("Record Insert succesfully");
  	                    </script>
  	               <?php
                     ?>
                           <script >
                                 location.replace("");
                           </script>
                     <?php
                 }
         else
       {
  	            ?>
                 	  <script >
  		              alert("Failed To Insert Record"+<?php echo $sql?>);
                  	</script>
  	           <?php
  	           ?>
              <script >
                location.replace("registerstudent.php");
               </script>
               <?php
  	
  
        }
    }
}
?>