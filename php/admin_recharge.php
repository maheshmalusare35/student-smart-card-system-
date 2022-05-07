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
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- Stylesheet CSS -->
    <link href="" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Delete_Student_Data</title>

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
      <div class="align-items-center">
        <div
          class="col-md-6 mx-auto shadow-lg p-4 bg-light border border-1 rounded-3"
        >
          <div class="d-grid gap-2 d-md-flex justify-content-end">
            <a href="../php/admin.php">
              <button type="button" class="btn-close"></button
            ></a>
          </div>

          <h1 class="text-center fw-bold mb-2">
            <span class="multicolortext">Self recharge to admin</span>
          </h1>
          <hr />
          <form action="../php/transferadminself.php" method="POST">
          <div class="mb-3">
          <label for="id_no" class="form-label">From_id_no</label>
          <input type="text" class="form-control" name="from_user_id" aria-label="Disabled input example" disabled />
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

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
