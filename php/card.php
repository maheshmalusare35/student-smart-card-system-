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

          }
      }
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
    <title>login form Student Smart Card</title>

    <style>
      * {
        margin: 0;
        top: 0;
        box-sizing: border-box;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: rgb(169, 250, 182);       
      }
      .card {
        background: white;
        width: 640px;
        height: 480px;
        border: 0px solid rgb(255, 255, 255);
        border-radius: 15px;
      }
      .card .head {
        height: 140px;
        background-color: rgb(0, 68, 255);
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
        display: flex;
        padding: 10px 10px 10px 10px;
      }
      .card .head img {
        width: 120px;
        height: 120px;
        text-align: center;
      }
      .card .head .header {
        float: right;
        text-align: center;
      }
      .head_main {
        padding-top: 15px;
        color: white;
        font-weight: lighter;
        font-size: 20px;
        margin-bottom: 10px;
      }
      .head_down {
        color: white;
        font-size: 17px;
      }
      .card .main {
        padding: 10px 10px 10px 10px;
        height: 270px;
        display: flex;
      }
      .card .main .img_set {
        padding: 30px 10px 30px 0px;
        display: table;
      }
      .card .main #profile {
        display: table-cell;
        width: 150px;
        height: 175px;
        border-radius: 5px;
      }
      .card .main #signature {
        display: table-cell;
        width: 150px;
        height: 50px;
        border-radius: 5px;
      }
      .card .main .info {
        float: right;
        padding: 10px 0px 0px 20px;
      }
      .card .main .info p {
        margin-bottom: 12px;
        font-weight: bold;
      }
      .card .main .info .info_class {
        display: flex;
      }
      .card .main .info .class_info {
        float: right;
        padding-left: 200px;
      }
      .card .footer {
        height: 70px;
        padding: 10px 0px 0px 10px;
        display: flex;
        justify-content: center;
      }
      .card .footer img {
        width: 325px;
        height: 50px;
      }
    </style>
  </head>
  <body>
    <div class="card">
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
          <img src="../images/img_avatar.png" alt="profile" id="profile" />
          <img src="../images/signature.png" alt="signature" id="signature" />
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
        <img src="../images/barcode.jpg" alt="barcode" class="center" />
      </div>
    </div>
  </body>
</html>
