<?php
session_start();
include("../database/databaseconnection.php");

$user_id=$_SESSION['user_id'];
 
//  $query = "SELECT * FROM register WHERE email='$email'";
//     $res = mysqli_query($conn,$query);
//     $check = mysqli_num_rows($res);


//     if($check > 0)
//       {
//           while ( $row = mysqli_fetch_assoc($res))
//           {
//               $user_id = $row['user_id'];              
//               $balance_to = $row['balance_to'];
//           }
//       }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="../logo/icons8-bank-cards-48.png">

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

    <!-- JQuery plugin-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title> Student Smart Card</title>
    <style>
        #sidebar-wrapper {
            width: 200px;
        }
        .navbar{
            width: 100vw;
        }

    </style>

</head>

<body>    




    

       



            <!-- Page content-->
            <div class="container-fluid p-4">            
            <br>
                  
                  <!--table show data fetching from database-->
                  <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="bg-dark text-white">
                      <th>SR_NO</th>
                      <th>FROM_USER_ID</th>
                      <th>TO_USER_ID</th>
                      <th>AMOUNT</th>
                      <th>AMOUNT_PURPOSE</th>
                      <th>DATE & TIME</th>
                      
                      <!-- <th>EDIT</th>
                      <th>DELETE</th> -->
                    </thead>

                        <tbody>
                          <?php
                              $displayquery = "SELECT * FROM transaction WHERE user_id='$user_id'";
                              $querydisplay = mysqli_query($conn,$displayquery);

                              //$row =mysqli_num_rows($querydisplay);

                              while ($result = mysqli_fetch_array($querydisplay)) {
                                ?>

                                  <tr>
                                    <td><?php echo $result ['id'];?></td>
                                    <td><?php echo $result ['from_user_id'];?></td>
                                    <td><?php echo $result ['to_user_id'];?></td>
                                    <td><?php echo $result ['amount'];?></td>
                                    <td><?php echo $result ['amount_purpose'];?></td>
                                    <td><?php echo $result ['time'];?></td>
                                   
                                    <!-- <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button></td>
                                    <td><button>Delete</button></td>                                     -->
                                  </tr>

                                <?php
                              }
                          ?>
                        </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

   



<!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"> </script>


    <!-- javascript -->
    <script type="text/javascript" src="">

    </script>

    



</body>

</html>