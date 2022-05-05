<?php 
session_start();
include("../database/databaseconnection.php");
 
 $email=$_SESSION['email'];
 
 $query = "SELECT * FROM register WHERE email='$email'";
    $res = mysqli_query($conn,$query);
    $check = mysqli_num_rows($res);

    if($check > 0)
      {
          while ( $row = mysqli_fetch_assoc($res))
          {
              $barcode = $row['barcode'];
              $user_id = $row['user_id'];
              $firstname = $row['firstname'];
              $middlename = $row['middlename'];
              $lastname = $row['lastname'];
              $email = $row['email'];
              $phone = $row['phone'];
              $department = $row['department'];
              $selectyear = $row['selectyear'];
              $bloodgroup = $row['bloodgroup'];
              $address = $row['address'];  
              $profilrpicture = $row['profilepicture'];

          }
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Favicon -->
    <link rel="icon" href="../logo/icons8-bank-cards-48.png" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />

    <!-- JQuery plugin-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <title>Student Smart Card</title>

    <!-- <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: rgb(169, 250, 182);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 640px;
  height: 480px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.head{
   height: 140px;
   background-color: rgb(0, 68, 255);
   border-top-right-radius: 15px;
   border-top-left-radius: 15px;
   display: flex;
  padding: 10px 10px 10px 10px;
}
.logo{
  width: 120px;
  height: 120px;
  text-align: center; 
  padding:0px 10px 0px 0px; 
}
.header{
  float: right;
  padding: 10px 10px 10px 10px;
  color: white;
}
.head_main{
  text-align: center;
  font-size: 20px;
}
.head_down{
  text-align: center;
}
.main{
  height: 270px;
  padding: 10px;
}
.img_set{
  float: left;
}
.profile{  
  display: table-cell;
  width: 150px;
  height: 175px;
  border-radius: 5px;
}
.signature {
  display: table-cell;
  width: 150px;
  height: 50px;
  border-radius: 5px;
}
.info{  
  float: right;
  padding: 20px;
  font-weight: bold;
}
.footer{
    height: 70px;
   padding: 10px 0px 0px 10px;
   display: flex;
   justify-content: center;
}
.footer img {
   width: 325px;
   height: 50px;
}

  </style> -->

    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: rgb(169, 250, 182);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 640px;
  height: 480px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
     .head {
        height: 140px;
        background-color: rgb(255, 0, 208);
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
        display: flex;
        padding: 10px 10px 10px 10px;
      }
     .head img {
        width: 120px;
        height: 120px;
        text-align: center;
      }
     .head .header {
        float: right;
        text-align: center;
      }
      .head_main {        
        color: black;
        font-weight: lighter;
        font-size: 20px;
        margin-bottom: 10px;
      }
      .head_down {
        color: black;
        font-size: 17px;
      }
     .main {
        padding: 10px 10px 10px 10px;
        height: 270px;
        display: flex;
      }
     .main .img_set {
        padding: 30px 10px 30px 0px;
        display: table;
      }
     .main .profile {
        display: table-cell;
        width: 150px;
        height: 175px;
        border-radius: 5px;
      }
     .main .signature {
        display: table-cell;
        width: 150px;
        height: 50px;
        border-radius: 5px;
      }
     .main .info {
        float: right;
        padding: 10px 0px 0px 30px;
      }
     .main .info p {
        margin-bottom: 12px;
        font-weight: bold;
      }
     .main .info .info_class {
        display: flex;
      }
     .main .info .class_info {
        float: right;
        padding-left: 200px;
      }
     .footer {
        height: 70px;
        padding: 10px 0px 0px 10px;
        display: flex;
        justify-content: center;
      }
     .footer img {
        width: 325px;
        height: 50px;
      }
    </style>
  </head>
  <body>

  <div class="center">
      <div class="head">
      <img class="logo" src="../logo/college logo.png" alt="logo" />
        <div class="header">
          <b>
            <p class="head_main">KONKAN GYANPEETH COLLEGE OF ENGINEERING</p>
          </b>
          <p class="head_down">
            Konkan Gyanpeeth College of Engineering, Karjat Konkan Gyanpeeth
            Shaiskshnik Sankul, At. Vengaon Road, Dahivali / Parade, Post:
            Tiware, Tal: Karjat, Dist: Raigad, MS 410201
          </p>
      </div> 
    </div>
      <div class="main">
       <div class="img_set">
       <img src="<?php echo " " . $profilrpicture . ""; ?>" alt="profile" class="profile" />
          <!-- <img src="../images/signature.png" alt="signature" class="signature" /> -->
        </div>
      <div class="info">
          <p>Id No: <?php echo " " . $user_id . ""; ?></p>

          <p>Name: <?php echo " " . $firstname . ""; ?> <?php echo " " . $middlename . ""; ?> <?php echo " " . $lastname . ""; ?></p>

          <p>Phone No: <?php echo " " . $phone . ""; ?></p>

          <div class="info_class">
            <p>Branch: <?php echo " " . $department . ""; ?></p>
            <!-- <p class="class_info">Class: <?php echo " " . $selectyear . ""; ?></p> -->
          </div>

          <p>Blood group: <?php echo " " . $bloodgroup . ""; ?></p>
          
          <p>Address: <?php echo " " . $address . ""; ?></p>
          
        
        </div>
      </div>
      <div class="footer">
      <img src="../barcode/barcode.php?text=<?php echo " " . $barcode . ""; ?>" alt="testing" />
      </div>
    </div>

    <div class="container" id="print_page"><button onclick="print_data()">Print this page</button></div>
    <!-- <div class="center">
      <div class="head">
        <img src="../logo/college logo.png" alt="logo" />
        <div class="header">
          <b>
            <p class="head_main">KONKAN GYANPEETH COLLEGE OF ENGINEERING</p>
          </b>
          <p class="head_down">
            Konkan Gyanpeeth College of Engineering, Karjat Konkan Gyanpeeth
            Shaiskshnik Sankul, At. Vengaon Road, Dahivali / Parade, Post:
            Tiware, Tal: Karjat, Dist: Raigad, MS 410201
          </p>
        </div>
      </div>      
      <div class="main">
        <div class="img_set">
          <img src="../images/img_avatar.png" alt="profile" class="profile" />
          <img src="../images/signature.png" alt="signature" class="signature" />
        </div>
        <div class="info">
          <p>Id No:<?php echo " " . $user_id . ""; ?></p>

          <p>Name:<?php echo " " . $firstname . ""; ?> <?php echo " " . $middlename . ""; ?> <?php echo " " . $lastname . ""; ?></p>

          <p>Phone No:<?php echo " " . $phone . ""; ?></p>

          <div class="info_class">
            <p>Branch:<?php echo " " . $department . ""; ?></p>
            <p class="class_info">Class:<?php echo " " . $selectyear . ""; ?></p>
          </div>

          <p>Blood group:<?php echo " " . $bloodgroup . ""; ?></p>
          
          <p>Address:<?php echo " " . $address . ""; ?></p>
          
        
        </div>
      </div>      
      <div class="footer">
        <img src="../images/barcode.jpg" alt="barcode" class="barcode" />
      </div>
    </div> -->


      <!-- javascript -->
      <script type="text/javascript" >
      function print_data(){
      $('#print_page').hide();
      window.print();
      }
    </script>
  </body>
</html>
