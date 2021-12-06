<!doctype html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="logo/icons8-bank-cards-48.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                    <a href="index.html"> <button type="button" class="btn-close"></button></a>
                </div>

               
                <form>      

                <?php 
			       if($success == 1)
                    { 
        		?>
            
                     <h1 class="text-center fw-bold mb-2"><span class="multicolortext">Email Verification</span> </h1>
                     <hr>
                      <div class="form-group mb-3">
                        <label for="otp" class="mb-3">Check your Email to get otp:</label>
                        <input type="text" name="otp" id="otp" class="form-control" 
                            autocomplete="off">
                      </div>                
                                      
                       <div class="d-grid gap-2 col-6 mx-auto mb-3">
                        <button type="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Verify OTP</button>
                       </div>
                    }

               <?php 
			      } else if ($success == 2)
                   {
				?>
                   <script >
                    location.replace("index.html");
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
                        <button type="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                    <?php 
			}
		?> 
                   
                </form>

            </div>
        </div>
    </div>


    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"> </script>


   


</body>

</html>