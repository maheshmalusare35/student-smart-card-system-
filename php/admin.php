<?php
session_start();
include("../database/databaseconnection.php");
if (!isset($_SESSION['firstname']) || $_SESSION['role']!= "Admin")  {
    header("Location: ../login.html");
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

    <!-- JQuery plugin-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Admin Login Student Smart Card</title>
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




    <div class="d-flex" id="wrapper" >

        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading bg-light text-center justify-content-center align-items-center p-3">           
        <img src="../logo/logo1.png"> 
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
                            <a class="dropdown-item" href="#">Generate_Id</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a>
                            <a class="dropdown-item" href="#">ADD_New_Student</a>
                            <a class="dropdown-item" href="#">Delete_Student_Data</a> 
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
                        <a class="dropdown-item" href="#">Generate_Id</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a>
                            <a class="dropdown-item" href="#">ADD_New_Teacher</a>
                            <a class="dropdown-item" href="#">Delete_Teacher_Data</a> 
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
                            Library
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
                            Management
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
                <?php echo "<h5>Welcome " . $_SESSION['firstname'] . "</h5>"; ?>  

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
            <br>
                  
                  <!--table show data fetching from database-->
                  <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="bg-dark text-white">
                      <th>Id</th>
                      <th>FIRSTNAME</th>
                      <th>MIDDLENAME</th>
                      <th>LASTNAME</th>
                      <th>EMAIL</th>
                      <th>PHONE NO</th>                     
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>

                        <tbody>
                          <?php
                              $displayquery = "select * from register";
                              $querydisplay = mysqli_query($conn,$displayquery);

                              //$row =mysqli_num_rows($querydisplay);

                              while ($result = mysqli_fetch_array($querydisplay)) {
                                ?>

                                  <tr>
                                    <td><?php echo $result ['id'];?></td>
                                    <td><?php echo $result ['firstname'];?></td>
                                    <td><?php echo $result ['middlename'];?></td>
                                    <td><?php echo $result ['lastname'];?></td>
                                    <td><?php echo $result ['email'];?></td>
                                    <td><?php echo $result ['phone'];?></td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button></td>
                                    <td><button>Delete</button></td>                                    
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

    <!-- model for Add_Money -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD_MONEY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
        <div class="mb-3">
          <label for="id_no" class="form-label">ID_NO</label>
          <input type="text" class="form-control" id="id_no">    
        </div>
        <div class="mb-3">
          <label for="amount" class="form-label">Add_Amount</label>
          <input type="text" class="form-control" id="amount">
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>


    <!-- model for Edit -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT_PROFILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                    <div class="row mt-4">
                        <div class="form-group mb-2 col-md-6">
                            <label for="first" class="mb-1"> First Name:</label>
                            <input type="text" class="form-control text-uppercase"
                                placeholder="" />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <label for="middle" class="mb-1"> Middle Name:</label>
                            <input type="text" name="middlename" id="middlenames" class="form-control text-uppercase"
                                placeholder=""  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-2 col-md-6">
                            <label for="last" class="mb-1"> Last Name:</label>
                            <input type="text" name="lastname" id="lastnames" class="form-control text-uppercase"
                                placeholder="" />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="" autocomplete="off"
                                />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-2 col-md-6">
                            <label for="phone" class="form-label">Contact No:</label>
                            <input type="phone" name="phone" class="form-control" id="phone" maxlength="10"
                                autocomplete="off" placeholder=""
                                />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                          <label class="form-label" class="mb-0">Select user Type:</label>
                          <select
                            class="form-select"
                            name="role"
                            aria-label="Default select example"
                            id="role"
                          >
                            <option value="">Select</option>
                            <option value="Student">Student</option>
                            <option value="Teacher">Teacher</option>
                          </select>
                          </div>
                    </div>

                    <form action="profilestudent.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" form-group mb-2 col-md-6">
                                <label class="form-label" class="mb-0">Gender</label>

                                <select class="form-select" name="gender" aria-label="Default select example"
                                    id="gender">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <h6 id="gendercheck" class="mb-2"></h6>
                            </div>

                            <div class=" form-group mb-2 col-md-6">
                                <label for="date" class="form-label">Date Of Birth:</label>
                                <input type="date" name="date" class="form-control" id="date" autocomplete="off">
                                <h6 id="datecheck" aria-required="true"></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2 col-md-6">
                                <label class="form-label" class="mb-0">Select year:</label>
                                <select class="form-select" name="selectyear" aria-label="Default select example"
                                    id="selectyear">
                                    <option value="">Select</option>
                                    <option value="FE">FE</option>
                                    <option value="SE">SE</option>
                                    <option value="TE">TE</option>
                                    <option value="BE">BE</option>
                                </select>
                                <h6 id="selectyearcheck" class="mb-2"></h6>
                            </div>
                            <div class=" form-group mb-2 col-md-6">
                                <label for="bloodgroup" class="form-label">Blood Group:</label>
                                <select class="form-select" name="bloodgroup" aria-label="Default select example"
                                    id="bloodgroup">
                                    <option value="">Select</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                <h6 id="bloodgroupcheck"></h6>
                            </div>
                        </div>
                        
                        <div class="form-group mb-2">
                            <label class="form-label">Select your Department:</label>
                            <select class="form-select" name="department" aria-label="Default select example"
                                id="department">
                                <option value="">Select</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="EXTC">Electronics and Telecommunication</option>
                            </select>
                            <h6 id="departmentcheck" class="mb-2"></h6>
                        </div>

                        <div class="form-group col-12 mb-2">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="1234 Main St Apartment, studio, or floor" autocomplete="off">
                            <h6 id="addresscheck" class="mb-2"></h6>
                        </div>
                        <!-- <div class="form-group col-12 mb-2">
                            <label for="inputAddress2" class="form-label">Addr8k,ess 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                          </div> -->
                        <div class="form-group col-12 mb-2">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" autocomplete="off">
                            <h6 id="citycheck" class="mb-2"></h6>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="form-group col-md-6">
                                <label for="inputState" class="form-label">State</label>
                                <select class="form-select" name="state" aria-label="Default select example" id="state">
                                    <option value="">Choose...</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                <h6 id="statecheck" class="mb-2"></h6>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip" class="form-label">Pin code</label>
                                <input type="text" class="form-control" name="pincode" id="pincode" maxlength="6"
                                    autocomplete="off">
                                <h6 id="pincodecheck" class="mb-2"></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-md-12">
                                <label for="formFileSm" class="form-label">Profile picture:</label>
                                <input type="file" class="form-control form-control-sm" name="profilepicture" id="profilepicture"
                                    >
                                <h6 id="profilepicturecheck" class="mb-2"></h6>
                            </div>
                            
                        </div>
                  </div>
                </div>


<!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"> </script>


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