<?php
session_start();
include("../database/databaseconnection.php");
if (!isset($_SESSION['firstname']) || $_SESSION['role']!= "Admin")  {
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
              $user_id = $row['user_id'];              
              $balance_to = $row['balance_to'];
          }
      }
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
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a>
                            <!-- <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">ADD_New_Student</a> -->
                            <a class="dropdown-item" href="../php/delete_student.php">Delete_Student_Data</a> 
                            <a class="dropdown-item" href="../php/card_status.php">Card_status</a>
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
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a>
                            <!-- <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">ADD_New_Teacher</a>-->
                             <a class="dropdown-item" href="../php/delete_student.php">Delete_Teacher_Data</a>  
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
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a> 
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
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a> 
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
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD_Money</a> 
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
                            <a class="dropdown-item" href="../php/admin_recharge.php">Self_Recharge</a>                           
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
            <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Your Balance:<?php echo " " . $balance_to . ""; ?></a>
                    </li>
              
    
                <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i></a></li> -->
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
                      <th>SR_NO</th>
                      <th>USER_ID</th>
                      <th>FIRSTNAME</th>
                      <th>MIDDLENAME</th>
                      <th>LASTNAME</th>
                      <th>EMAIL</th>
                      <th>PHONE NO</th>                     
                      <!-- <th>EDIT</th>
                      <th>DELETE</th> -->
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
                                    <td><?php echo $result ['user_id'];?></td>
                                    <td><?php echo $result ['firstname'];?></td>
                                    <td><?php echo $result ['middlename'];?></td>
                                    <td><?php echo $result ['lastname'];?></td>
                                    <td><?php echo $result ['email'];?></td>
                                    <td><?php echo $result ['phone'];?></td>
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

    <!-- model for Add_Money -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD_MONEY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../php/transferadmin.php" method="POST">
        <div class="mb-3">
          <label for="id_no" class="form-label">From_id_no</label>
          <input type="text" class="form-control" name="from_user_id" >
          <!-- <input type="text" class="form-control text-uppercase" name="from_user_id" placeholder="<?php echo " " . $user_id . ""; ?>" aria-label="Disabled input example" disabled />     -->
        </div>
        <div class="mb-3">
          <label for="id_no" class="form-label">To_id_no</label>
          <input type="text" class="form-control" name="to_user_id" >    
        </div>
        <div class="mb-3">
          <label for="amount" class="form-label">Add_Amount</label>
          <input type="text" class="form-control" name="amount" >
        </div>
        <div class="form-group mb-3">
          <label class="form-label" class="mb-0">What Purpose Amount Add</label>
          <select class="form-select" name="amount_purpose" aria-label="Default select example" >
            <option value="">Select</option>
            <option value="Recharge">Recharge card</option>           
          </select>                                
        </div>
      <!-- </div> -->
      <div class="modal-footer">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

 
 

    <!-- model for Add_student -->
    <!-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            
          <form action="../php/register.php" method="post">
            <div class="row mt-4">
              <div class="form-group mb-2 col-md-6">
                <label for="first" class="mb-1"> First Name:</label>
                <input
                  type="text"
                  name="firstname"
                  id="firstnames"
                  class="form-control text-uppercase"
                />
                <h6 id="firstcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for="middle" class="mb-1"> Middle Name:</label>
                <input
                  type="text"
                  name="middlename"
                  id="middlenames"
                  class="form-control text-uppercase"
                />
                <h6 id="middlecheck"></h6>
              </div>
            </div>

            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="last" class="mb-1"> Last Name:</label>
                <input
                  type="text"
                  name="lastname"
                  id="lastnames"
                  class="form-control text-uppercase"
                />
                <h6 id="lastcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for="email" class="form-label">Email address:</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="email"
                  placeholder="name@example.com"
                  autocomplete="off"
                />
                <h6 id="emailcheck"></h6>
              </div>
            </div>

            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="phone" class="form-label">Contact No:</label>
                <input
                  type="phone"
                  name="phone"
                  class="form-control"
                  id="phone"
                  maxlength="10"
                  autocomplete="off"
                />
                <h6 id="phonecheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label class="form-label" class="mb-0">Select user Type:</label>
                <select
                  class="form-select"
                  name="role"
                  aria-label="Default select example"
                  id="role"
                >
                 
                  <option value="Student">Student</option>
                  
                </select>
                <h6 id="rolecheck" class="mb-2"></h6>
              </div>
            </div>

           

            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="password" class="mb-1"> Password:</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="bottom"
                  data-content="My popover content."
                  placeholder="Xyz@1kos"
                  autocomplete="off"
                />
                <h6 id="passwordcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for=" confirmpassword" class="mb-1"
                  >Confirm Password:</label
                >
                <input
                  type="password"
                  name="confirmpass"
                  id="confirmpassword"
                  class="form-control"
                  autocomplete="off"
                />
                <h6 id="confirmpasscheck"></h6>
              </div>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
                onclick="myFunction()"
              />
              <label class="form-check-label" for="flexCheckDefault">
                <p class="text-center">Show Password</p>
              </label>
            </div>

            

            <div class="d-grid gap-2 col-6 mx-auto mb-1">
              <button
                type="submit"
                id="submitbtn"
                name="submit"
                value="submit"
                class="btn btn-primary btn-lg"
              >
               ADD_STUDENT
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>                 
          </div>
        </div>
      </div>
    </div> -->


    <!-- model for Add_teacher -->
    <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new teacher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            
          <form action="../php/register.php" method="post">
            <div class="row mt-4">
              <div class="form-group mb-2 col-md-6">
                <label for="first" class="mb-1"> First Name:</label>
                <input
                  type="text"
                  name="firstname"
                  id="firstnames"
                  class="form-control text-uppercase"
                />
                <h6 id="firstcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for="middle" class="mb-1"> Middle Name:</label>
                <input
                  type="text"
                  name="middlename"
                  id="middlenames"
                  class="form-control text-uppercase"
                />
                <h6 id="middlecheck"></h6>
              </div>
            </div>

            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="last" class="mb-1"> Last Name:</label>
                <input
                  type="text"
                  name="lastname"
                  id="lastnames"
                  class="form-control text-uppercase"
                />
                <h6 id="lastcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for="email" class="form-label">Email address:</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="email"
                  placeholder="name@example.com"
                  autocomplete="off"
                />
                <h6 id="emailcheck"></h6>
              </div>
            </div>

            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="phone" class="form-label">Contact No:</label>
                <input
                  type="phone"
                  name="phone"
                  class="form-control"
                  id="phone"
                  maxlength="10"
                  autocomplete="off"
                />
                <h6 id="phonecheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label class="form-label" class="mb-0">Select user Type:</label>
                <select
                  class="form-select"
                  name="role"
                  aria-label="Default select example"
                  id="role"
                >                          
                  <option value="Teacher">Teacher</option>
                </select>
                <h6 id="rolecheck" class="mb-2"></h6>
              </div>
            </div>

            
            <div class="row">
              <div class="form-group mb-2 col-md-6">
                <label for="password" class="mb-1"> Password:</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="bottom"
                  data-content="My popover content."
                  placeholder="Xyz@1kos"
                  autocomplete="off"
                />
                <h6 id="passwordcheck"></h6>
              </div>
              <div class="form-group mb-2 col-md-6">
                <label for=" confirmpassword" class="mb-1"
                  >Confirm Password:</label
                >
                <input
                  type="password"
                  name="confirmpass"
                  id="confirmpassword"
                  class="form-control"
                  autocomplete="off"
                />
                <h6 id="confirmpasscheck"></h6>
              </div>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
                onclick="myFunction()"
              />
              <label class="form-check-label" for="flexCheckDefault">
                <p class="text-center">Show Password</p>
              </label>
            </div>

            

            <div class="d-grid gap-2 col-6 mx-auto mb-1">
              <button
                type="submit"
                id="submitbtn"
                name="submit"
                value="submit"
                class="btn btn-primary btn-lg"
              >
               ADD_TEACHER
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>                 
          </div>
        </div>
      </div>
    </div> -->



     <!-- model for Delete data -->
     <!-- <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete_Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../php/delete.php" method="POST">
      <div class="mb-3">
          <label for="id_no" class="form-label">ID_NO</label>
          <input type="text" class="form-control" name="user_id" id="id_no">    
        </div>
        <div class="modal-footer">
      <button type="submit" name="submit" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div> -->




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