<?php session_start();
if (!isset($_SESSION['username'])) {
    header("Location: indexnew.php");
}

 ?>


<body>
   
</body>
</body>


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

    <!-- JQuery plugin-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Admin Login Student Smart Card</title>
    <style>
        #sidebar-wrapper {
            width: 350px;
        }

    </style>

</head>

<body>    




    <div class="d-flex" id="wrapper">

        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading bg-light text-center justify-content-center align-items-center p-3">           
        <img src="logo/logo1.png"> 
        <div><h5>Student Smart Card</h5></div>                
    </div>
           <div class="list-group">

                <div class="accordion" id="accordionExample">  
                    
                    <!-- example1 -->
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Students
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>

                    <!-- example2 -->

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Teachers
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>  

                    <!-- example3 -->

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Office
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>  

                    <!-- example4 -->

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Cafeteria
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>

                     <!-- example5 -->           

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Management
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>  

                    <!-- example6 -->

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Others
                          </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                            <a class="dropdown-item" href="#">Page 3</a> 
                        </div>
                      </div>  


                </div>


                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>
                <a class="list-group-item-action list-group-item-light p-3" href="#!"></a>                          

            </div>
        </div>


        <!-- Page content wrapper-->
        <div id="page-content-wrapper">

          
   <!-- Top navigation-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
      
    <div class="mx-5">
        <button class="btn btn-primary" id="sidebarToggle" onclick="myFunction()"><i
                class="fas fa-bars"></i> Menu</button></div>
                <?php echo "<h5>Welcome " . $_SESSION['username'] . "</h5>"; ?>  

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                
               
    
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fas fa-user-circle"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Setting</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

           

            <!-- Page content-->
            <div class="container-fluid p-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi unde quos voluptatem porro nostrum. Ipsa architecto quae aliquid ducimus magnam pariatur aspernatur quia qui? Ut, neque. Harum necessitatibus obcaecati eos.</p>
            
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Students enroll</h5>
                                                
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Teachers enroll</h5>
                                                 
                        </div>
                      </div>
                    </div>
                                     

                    <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Parents enroll</h5>
                                                     
                          </div>
                        </div>
                      </div>                      
                  </div>

            </div>
        </div>
    </div>

        


 <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"> </script>


    <!-- javascript -->
    <script type="text/javascript" src="">

    </script>

    <script>
        // Sidebar hide/close
        function myFunction() {
            var x = document.getElementById("sidebar-wrapper");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>



</body>

</html>