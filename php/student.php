<?php session_start();
if (!isset($_SESSION['firstname'])) {
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
            width: 350px;
        }

    </style>

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
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                <li class="nav-item ">
                    <a class="nav-link fw-bold" href="#"><i class="fas fa-tasks"></i> To-do</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link fw-bold" href="#"><i class="far fa-calendar-week"></i> Calender</a>
                   </li>
                   <li class="nav-item ">
                     <a class="nav-link fw-bold" href="#"><i class="fas fa-comments-dollar"></i> Your Transaction</a>
                   </li>
                   <li class="nav-item ">
                     <a class="nav-link fw-bold" href="#"><i class="fas fa-poll-h"></i> Result</a>
                   </li>     

                 <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Your Balance:</a>
                 </li>
                <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i></a></li>
                <li class="nav-item dropdown"> -->
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fas fa-user-circle"></i></a>
                    <div class="dropdown-menu dropdown-menu-end mb-2" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Setting</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>          


<div class="modal fade col-md-12" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header mb-0">
          <h5 class="modal-title" id="exampleModalLabel"> 
              Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="row mt-4">
                  <div class="form-group mb-2 col-md-6">
                    <label for="first" class="mb-1"> First Name:</label>
                    <input
                      type="text"
                      name="firstname"
                      id="firstnames"
                      class="form-control text-uppercase"
                      aria-label="Disabled input example" disabled
                    />                   
                  </div>
                  <div class="form-group mb-2 col-md-6">
                    <label for="middle" class="mb-1"> Middle Name:</label>
                    <input
                      type="text"
                      name="middlename"
                      id="middlenames"
                      class="form-control text-uppercase"
                      aria-label="Disabled input example" disabled
                    />                    
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
                      aria-label="Disabled input example" disabled
                    />                   
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
                      aria-label="Disabled input example" disabled
                    />                    
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
                      aria-label="Disabled input example" disabled
                    />                  
                  </div>
                  <div class="form-group mb-2 col-md-6">
                    <label class="form-label" class="mb-0">Select user Type:</label>
                    <input
                    type="text"
                    name="role"
                    id="role"
                    class="form-control"
                    aria-label="Disabled input example" disabled
                  />
                  </div>
                </div>    
                <div class="row">
                            <div class=" form-group mb-2 col-md-6">
                                <label class="form-label" class="mb-0">Gender</label>
    
                                <select class="form-select" name="gender" aria-label="Default select example" id="gender">
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
                                <h6 id="datecheck"></h6>
                            </div>
                        </div>
    
                
             <div class="row">
                <div class="form-group mb-2 col-md-6">
                            <label class="form-label" class="mb-0">Select year:</label>
                            <select class="form-select" name="year" aria-label="Default select example" id="select">
                                <option value="">Select</option>
                                <option value="FE">FE</option>
                                <option value="SE">SE</option>
                                <option value="TE">TE</option>
                                <option value="BE">BE</option>
                            </select>
                            <h6 id="selectcheck" class="mb-2"></h6>
                        </div>
                        <div class=" form-group mb-2 col-md-6">
                            <label for="bloodgroup" class="form-label">Blood Group:</label>
                            <input type="text" name="bloodgroup" class="form-control" id="bloodgroup" autocomplete="off">
                            <h6 id="bloodgroupcheck"></h6>
                        </div>
            </div>

            <div class="form-group mb-2">
              <label class="form-label" >Select your Department:</label>
              <select class="form-select" name="department" aria-label="Default select example" id="department">
                  <option value="">Select</option>
                  <option value="Mechanical">Mechanical</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Production Engineering">Production Engineering</option>
              </select>
              <h6 id="selectcheck" class="mb-2"></h6>
          </div>

                        <div class="form-group col-12 mb-2">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St Apartment, studio, or floor">
                          </div>
                          <!-- <div class="form-group col-12 mb-2">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                          </div> -->
                          <div class="form-group col-12 mb-2">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="row mb-2">
                          <div class="form-group col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>Andhra Pradesh</option>
                              <option>Arunachal Pradesh</option>
                              <option>Assam</option>
                              <option>Bihar</option>
                              <option>Chhattisgarh</option>
                              <option>Goa</option>
                              <option>Gujarat</option>
                              <option>Haryana</option>
                              <option>Himachal Pradesh</option>
                              <option>Jharkhand</option>
                              <option>Karnataka</option>
                              <option>Kerala</option>
                              <option>Madhya Pradesh</option>
                              <option>Maharashtra</option>
                              <option>Manipur</option>
                              <option>Meghalaya</option>
                              <option>Mizoram</option>
                              <option>Nagaland</option>
                              <option>Odisha</option>
                              <option>Punjab</option>
                              <option>Rajasthan</option>
                              <option>Sikkim</option>
                              <option>Tamil Nadu</option>
                              <option>Telangana</option>
                              <option>Tripura</option>
                              <option>Uttar Pradesh</option>
                              <option>Uttarakhand</option>
                              <option>West Bengal</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputZip" class="form-label">Pin code</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group mb-3 col-md-6">
                            <label for="formFileSm" class="form-label">Profile picture:</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                          </div>
                          <div class="form-group mb-3 col-md-6">
                            <label for="formFileSm" class="form-label">Signature:</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                          </div>
                        </div>
                            <hr>

                          <div class="d-grid gap-2 col-6 mx-auto mb-1">
                            <button type="submit" id="submitbtn" name="submit" value="submit" class="btn btn-primary btn-lg">Save changes
                            </button>
                          </div>
                  </form>
        </div>
        <!-- <div class="modal-footer">
          
        </div> -->
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