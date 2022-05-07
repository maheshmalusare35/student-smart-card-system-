<?php 
session_start();
include("../database/databaseconnection.php");

if (!isset($_SESSION['firstname']) || $_SESSION['role']!= "Student") {
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
              $firstname = $row['firstname'];
              $middlename = $row['middlename'];
              $lastname = $row['lastname'];
              $email = $row['email'];
              $phone = $row['phone'];
              $role = $row['role'];
              $balance = $row['balance'];
          }
      }
      $_SESSION['user_id'] = $user_id;
?>
<!DOCTYPE html>
<html lang="en">
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

    <title>Register form Student Smart Card</title>

    <style type="text/css">
    body {

        background: rgb(169, 250, 182);
    }

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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                    <!-- <li class="nav-item">
                        <a class="nav-link fw-bold" href="#"><i class="fas fa-tasks"></i> To-do</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link fw-bold" href="#"><i class="far fa-calendar-week"></i> Calender</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="../php/your_transaction.php"><i class="fas fa-comments-dollar"></i> Your Transaction</a>
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
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-user-circle"></i></a>
                        <div class="dropdown-menu dropdown-menu-end mb-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="fas fa-user"></i> Profile</a>

                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
  
    <div class="container">
        <a class="btn btn-primary" href="studentcard.php"> generate card</a>
    </div>

    <!-- Modal -->
    <div class="modal fade col-md-12" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mb-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">

                    <div class="row mt-4">
                        <div class="form-group mb-2 col-md-6">
                            <label for="first" class="mb-1"> First Name:</label>
                            <input type="text" class="form-control text-uppercase"
                                placeholder="<?php echo " " . $firstname . ""; ?>" aria-label="Disabled input example"
                                disabled />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <label for="middle" class="mb-1"> Middle Name:</label>
                            <input type="text" name="middlename" id="middlenames" class="form-control text-uppercase"
                                placeholder="<?php echo " " . $middlename . ""; ?>" aria-label="Disabled input example"
                                disabled />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-2 col-md-6">
                            <label for="last" class="mb-1"> Last Name:</label>
                            <input type="text" name="lastname" id="lastnames" class="form-control text-uppercase"
                                placeholder="<?php echo " " . $lastname . ""; ?>" aria-label="Disabled input example"
                                disabled />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="<?php echo " " . $email . ""; ?>" autocomplete="off"
                                aria-label="Disabled input example" disabled />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-2 col-md-6">
                            <label for="phone" class="form-label">Contact No:</label>
                            <input type="phone" name="phone" class="form-control" id="phone" maxlength="10"
                                autocomplete="off" placeholder="<?php echo " " . $phone . ""; ?>"
                                aria-label="Disabled input example" disabled />
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <label class="form-label" class="mb-0">Select user Type:</label>
                            <input type="text" name="role" id="role" class="form-control"
                                placeholder="<?php echo " " . $role . ""; ?>" aria-label="Disabled input example"
                                disabled />
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
                                <option value="MECH">Mechanical</option>
                                <option value="CS">Computer Science</option>
                                <option value="IT">Information Technology</option>
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
                            <label for="inputAddress2" class="form-label">Address 2</label>
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
                        <hr>
                        <div class="d-grid gap-2 col-6 mx-auto mb-1">
                            <button type="submit" id="submitbtn" name="submit" value="submit"
                                class="btn btn-primary btn-lg">Save changes
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
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    <!-- javascript -->
    <script type="text/javascript">
    // for the check the form

    $(document).ready(function() {

        //for the gender check

        $('#gendercheck').hide();

        var gender_err = true;

        $('#gender').click(function() {
            gender_check();
        });

        function gender_check() {

            var genderstr = $('#gender');

            if (genderstr.val() === '') {
                $('#gendercheck').show();
                $('#gendercheck').html("*please select the gender option*");
                $('#gendercheck').focus();
                $('#gendercheck').css("color", "red");
                gender_err = false;
                return false;
            } else {
                $('#gendercheck').hide();
            }

        }

        // for the date jquery

        $('#datecheck').hide();

        var date_err = true;

        $('#date').keyup(function() {
            date_check();
        });

        function date_check() {
            var date_val = $('#date').val();

            if (date_val.length == '') {
                $('#datecheck').show();
                $('#datecheck').html("*please select the date of birth*");
                $('#datecheck').focus();
                $('#datecheck').css("color", "red");
                date_err = false;
                return false;
            } else {
                $('#datecheck').hide();
            }
        }


        //for the selectyear check

        $('#selectyearcheck').hide();

        var selectyear_err = true;

        $('#selectyear').click(function() {
            selectyear_check();
        });

        function selectyear_check() {

            var selectyearstr = $('#selectyear');

            if (selectyearstr.val() === '') {
                $('#selectyearcheck').show();
                $('#selectyearcheck').html("*please select the year option*");
                $('#selectyearcheck').focus();
                $('#selectyearcheck').css("color", "red");
                selectyear_err = false;
                return false;
            } else {
                $('#selectyearcheck').hide();
            }

        }


        // for the blood group jquery

        $('#bloodgroupcheck').hide();

        var bloodgroup_err = true;

        $('#bloodgroup').click(function() {
            bloodgroup_check();
        });

        function bloodgroup_check() {

            var bloodgroupstr = $('#bloodgroup');

            if (bloodgroupstr.val() === '') {
                $('#bloodgroupcheck').show();
                $('#bloodgroupcheck').html("*please fill the bloodgroup*");
                $('#bloodgroupcheck').focus();
                $('#bloodgroupcheck').css("color", "red");
                bloodgroup_err = false;
                return false;
            } else {
                $('#bloodgroupcheck').hide();
            }

        }


        // for the department jquery

        $('#departmentcheck').hide();

        var department_err = true;

        $('#department').click(function() {
            department_check();
        });

        function department_check() {

            var departmentstr = $('#department');

            if (departmentstr.val() === '') {
                $('#departmentcheck').show();
                $('#departmentcheck').html("*please select the department option*");
                $('#departmentcheck').focus();
                $('#departmentcheck').css("color", "red");
                department_err = false;
                return false;
            } else {
                $('#departmentcheck').hide();
            }

        }


        // for the address jquery

        $("#addresscheck").hide();

        var address_err = true;

        $("#address").keyup(function() {
            address_check();
        });

        function address_check() {
            var address_val = $("#address").val();

            if (address_val.length == "") {
                $("#addresscheck").show();
                $("#addresscheck").html("*please fill the address*");
                $("#addresscheck").focus();
                $("#addresscheck").css("color", "red");
                address_err = false;
                return false;
            } else {
                $("#addresscheck").hide();
            }
        }


        // for the city jquery

        $("#citycheck").hide();

        var city_err = true;

        $("#city").keyup(function() {
            city_check();
        });

        function city_check() {
            var city_val = $("#city").val();

            if (city_val.length == "") {
                $("#citycheck").show();
                $("#citycheck").html("*please fill the city*");
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                city_err = false;
                return false;
            } else {
                $("#citycheck").hide();
            }

            if (city_val.match(/([0-9])/)) {
                $("#citycheck").show();
                $("#citycheck").html("*please fill the valid city*");
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                city_err = false;
                return false;
            } else {
                $("#citycheck").hide();
            }

            if (
                city_val.match(
                    /([~,`,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,[,},|,\,/,:,;,",',<,>,.,?,])/
                )
            ) {
                $("#citycheck").show();
                $("#citycheck").html("*please fill the valid city*");
                $("#citycheck").focus();
                $("#citycheck").css("color", "red");
                city_err = false;
                return false;
            } else {
                $("#citycheck").hide();
            }
        }


        // for the state jquery

        $('#statecheck').hide();

        var state_err = true;

        $('#state').click(function() {
            state_check();
        });

        function state_check() {

            var statestr = $('#state');

            if (statestr.val() === '') {
                $('#statecheck').show();
                $('#statecheck').html("*please select the state option*");
                $('#statecheck').focus();
                $('#statecheck').css("color", "red");
                state_err = false;
                return false;
            } else {
                $('#statecheck').hide();
            }

        }


        // for the pincode jquery

        $("#pincodecheck").hide();

        var pincode_err = true;

        $("#pincode").keyup(function() {
            pincode_check();
        });

        function pincode_check() {
            var pincode_val = $("#pincode").val();

            if (pincode_val.length == "") {
                $("#pincodecheck").show();
                $("#pincodecheck").html("*please fill the pincode*");
                $("#pincodecheck").focus();
                $("#pincodecheck").css("color", "red");
                pincode_err = false;
                return false;
            } else {
                $("#pincodecheck").hide();
            }

            if (pincode_val.match(/([a-zA-Z])/)) {
                $("#pincodecheck").show();
                $("#pincodecheck").html("*please fill the valid pincode*");
                $("#pincodecheck").focus();
                $("#pincodecheck").css("color", "red");
                pincode_err = false;
                return false;
            } else {
                $("#pincodecheck").hide();
            }

            if (
                pincode_val.match(
                    /([~,`,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,[,},|,\,/,:,;,",',<,>,.,?,])/
                )
            ) {
                $("#pincodecheck").show();
                $("#pincodecheck").html("*please fill the valid pincode*");
                $("#pincodecheck").focus();
                $("#pincodecheck").css("color", "red");
                pincode_err = false;
                return false;
            } else {
                $("#pincodecheck").hide();
            }
        }

        // for the profilepicture jquery

        $("#profilepicturecheck").hide();

        var profilepicture_err = true;

        $("#profilepicture").click(function() {
            profilepicture_check();
        });

        function profilepicture_check() {

            var profilepicturestr = $("#profilepicture").val();

            if (profilepicturestr.length == 0) {
                $("#profilepicturecheck").show();
                $("#profilepicturecheck").html("*please upload the profilepicture*");
                $("#profilepicturecheck").focus();
                $("#profilepicturecheck").css("color", "red");
                profilepicture_err = false;
                return false;
            } else {
                $("#profilepicturecheck").hide();
            }


            if (!profilepicturestr.match(/\.(jpg|jpeg|png)$/)) {
                $("#profilepicturecheck").show();
                $("#profilepicturecheck").html(
                    "*please upload the proper format profilepicture (e.g jpg/jpeg/png)*");
                $("#profilepicturecheck").focus();
                $("#profilepicturecheck").css("color", "red");
                profilepicture_err = false;
                return false;
            } else {
                $("#profilepicturecheck").hide();
            }

            var profilepicture_str = $('#profilepicture')[0].files[0].size;

            if (profilepicture_str > 2097152) {
                $("#profilepicturecheck").show();
                $("#profilepicturecheck").html("*File size is greater than 2MB*");
                $("#profilepicturecheck").focus();
                $("#profilepicturecheck").css("color", "red");
                profilepicture_err = false;
                return false;
            } else {
                $("#profilepicturecheck").hide();
            }

        }

    




        // for the check submit

        $("#submitbtn").click(function() {

            gender_err = true;
            date_err = true;
            selectyear_err = true;
            bloodgroup_err = true;
            department_err = true;
            adress_err = true;
            city_err = true;
            state_err = true;
            pincode_err = true;
            profilepicture_err = true;
            


            gender_check();
            date_check();
            selectyear_check();
            bloodgroup_check();
            department_check();
            address_check();
            city_check();
            state_check();
            pincode_check();
            profilepicture_check();
            




            if (
                gender_err == true &&
                date_err == true &&
                selectyear_err == true &&
                bloodgroup_err == true &&
                department_err == true &&
                adress_err == true &&
                city_err == true &&
                state_err == true &&
                pincode_err == true &&
                profilepicture_err == true                
            ) {
                return true;
            } else {
                return false;
            }
        });
    });
    </script>
</body>

</html>