<?php
include "mail_function.php";
include "../database/databaseconnection.php";
date_default_timezone_set("Asia/Kolkata");
$success = "";


if(!empty($_POST["submit_email"])) {
    $email=$_POST["email"];
    $_SESSION['email']=$_POST["email"];
    $result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "'");
    /*$count  = mysqli_num_rows($result);*/
    if(mysqli_num_rows($result)>0) {
        // generate OTP
        $otp = rand(100000,999999);
        
        // Send OTP
        require_once("mail_function.php");
        $mail_status = sendOTP($_POST["email"],$otp);
         $mail_status=1; 
        if($mail_status == 1) {
            $result = mysqli_query($conn,"UPDATE register SET otp='".$otp."',is_expired='0', create_at='" .date("Y-m-d H:i:s"). "' WHERE email='".$email."' ");
            // $current_id = mysqli_insert_id($conn);
        
                $success=1;
            
        }
    } else {
      
        echo "<script>alert('oops! Email not exists!')</script>";
    }
}
if(!empty($_POST["submit_otp"])) {
    $result = mysqli_query($conn,"SELECT * FROM register WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 1 MINUTE)");
    // $count  = mysqli_num_rows($result);
    if(!empty(mysqli_num_rows($result))) {
        $result = mysqli_query($conn,"UPDATE register SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
        $success = 2;   
    } else {
        $success = 1;
       
         echo "<script>alert('oops! Invalid OTP!')</script>";

    }   
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="logo/icons8-bank-cards-48.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome icons link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Stylesheet CSS -->
    <link href="" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>  Student Smart Card Email Verification</title>

    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgb(169, 250, 182);
            background-attachment: fixed;
}
                                                    

        .multicolortext {
            background-image: linear-gradient(45deg, #ffaf00, #bb02ff);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* .container-fluid {
            position: relative;
            border: 10px solid rgb(219, 212, 212);
            border-radius: 10px;
            background-color: rgb(255, 255, 255);
            justify-content: center;
            align-items: center;
            margin-left: 100px;
            margin-right: 100px;
        } */

      
    </style>

</head>

             
          
<body>


    <div class="container-fluid">
     
 
        <div class=" align-items-center">

            
            <div class="col-md-6  mx-auto shadow-lg p-4 bg-light border border-1 rounded-3">



                <div class="d-grid gap-2 d-md-flex justify-content-end">
                    <a href="../index.html"> <button type="button" class="btn-close"></button></a>
                </div>

               
                <form method="POST">      

                <?php 
			       if($success == 1)
                    { 
        		?>
            
                     <h1 class="text-center fw-bold mb-2"><span class="multicolortext">Email Verification</span> </h1>
                     <hr>
                      <div class="form-group mb-3">
                        <label for="otp" class="mb-3">Check your Email to get otp:</label>
                        <input type="text" name="otp" id="otp" class="form-control" placeholder="Type otp" maxlength="6"
                            autocomplete="off">
                      </div>                
                                      
                       <div class=" gap-2 mb-3 row align-items-center justify-content-center">
                        <button type="submit" name="submit_otp" value="submit" class="btn btn-primary btn-lg col-md-4">Verify OTP</button>                  
                        <a href="#" class="btn btn-primary btn-lg col-md-4" type="submit" name="send_otp" value="send_otp">Send OTP</a>
                       </div>
                    

               <?php 
			      }


                   else if ($success == 2)
                   {
				?>
                   <script >
                    location.replace("../index.html");
                   </script>
                 <?php
			    
                 ?>
	
		        <?php
		        	}

			   else {
		       ?>
		
                        
                    <h1 class="text-center fw-bold mb-2"><span class="multicolortext">Email Verification</span> </h1>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="email" class="mb-3">Enter your Email id use in registration:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="name@example.com"
                            autocomplete="off">
                    </div>                
                                      
                    <div class="d-grid gap-2 col-6 mx-auto mb-3">
                        <button type="submit" name="submit_email" value="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                    <?php 
			}
		?> 
                   
                </form>

            </div>
        </div>
    </div>


    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"> </script>



</body>

</html>