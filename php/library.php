<?php
session_start();
include("../database/databaseconnection.php");
if (!isset($_SESSION['firstname']) || $_SESSION['role']!= "Library")  {
    header("Location: ../login.html");
}
$email=$_SESSION['email'];
 
 $query = "SELECT * FROM register WHERE email='$email'";
    $res = mysqli_query($conn,$query);
    $check = mysqli_num_rows($res);


    if($check > 0)
      {
          while ( $row = mysqli_fetch_assoc($res))
          {
              $firstname = $row['firstname'];
            //   $middlename = $row['middlename'];
            //   $lastname = $row['lastname'];
            //   $email = $row['email'];
            //   $phone = $row['phone'];
            //   $role = $row['role'];
              $balance = $row['balance'];
          }
      }
?>
<!DOCTYPE html>
<html>
<head>
   <!-- Favicon -->
   <link rel="icon" href="logo/icons8-bank-cards-48.png" />

<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="ie-edge" />

<!-- Bootstrap CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" />

<!-- font awesome icons link -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<!-- Stylesheet CSS -->
<link href="" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title>Library</title>
</head>
<body>
    
       <!-- Top navigation-->
       <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom p-0 mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../logo/logo1.png" class="img-fluid"
                    style="width: 100px; height: 50px;">
            </a>
            <?php echo "<h5>Welcome " . $_SESSION['firstname'] . "</h5>"; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

<li class="nav-item">
    <a class="nav-link fw-bold" href="#"><i class="fas fa-tasks"></i> To-do</a>
</li>
<li class="nav-item">
    <a class="nav-link fw-bold" href="#"><i class="far fa-calendar-week"></i> Calender</a>
</li>
<li class="nav-item">
    <a class="nav-link fw-bold" href="#"><i class="fas fa-comments-dollar"></i> Your Transaction</a>
</li>
<!-- <li class="nav-item">
  <a class="nav-link fw-bold" href="#"><i class="fas fa-poll-h"></i> Result</a>
</li>      -->

<li class="nav-item">
    <a class="nav-link fw-bold" href="#">Your Balance:<?php echo " " . $balance . ""; ?></a>
</li>
<!-- <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i></a></li>
<li class="nav-item dropdown"> -->
<li class="nav-item">
<a class="nav-link fw-bold" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</li>
</ul>

                
            </div>
        </div>
    </nav>


    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>