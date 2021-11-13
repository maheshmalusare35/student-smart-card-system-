<?php
date_default_timezone_set("Asia/Kolkata");
$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","id15674490_root","Malusare@123456","id15674490_mahesh");
if(!empty($_POST["submit_email"])) {
    $email=$_POST["email"];
    $_SESSION['email']=$_POST["email"];
	$result = mysqli_query($conn,"SELECT * FROM register WHERE email='" . $_POST["email"] . "'");
	/*$count  = mysqli_num_rows($result);*/
	if(mysqli_num_rows($result)>0) {
		// generate OTP
		$otp = rand(100000,999999);
		
		// Send OTP
		require_once("mail_function.php");
		$mail_status = sendOTP($_POST["email"],$otp);
		 $mail_status=1; 
		if($mail_status == 1) {
			$result = mysqli_query($conn,"UPDATE register SET otp='".$otp."',is_expired='0' WHERE email='".$email."' ");
			$current_id = mysqli_insert_id($conn);
		
				$success=1;
			
		}
	} else {
		$error_message = "Email not exists!";
	}
}
if(!empty($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM register WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	/*$count  = mysqli_num_rows($result);*/
	if(!empty(mysqli_num_rows($result))) {
		$result = mysqli_query($conn,"UPDATE register SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	
}
?>
<html>
<head>
<title>Email Verification</title>
<style>
body{
	font-family: calibri;
	background-image: linear-gradient(to bottom right,#ff99dd,#ffff66);
}


.error_message {
	color:black;
    background:  #ff3300;
    border: #ff704d 2px solid;
}
.message {
	margin-top: 15%;
	margin-left: 30%;
	width: 100%;
    max-width: 340px;
    padding: 10px 30px;
    border-radius: 4px;
    margin-bottom: 5px;    
}

input[type="submit"]
{
	width: 100%;
	height: 50px;
	border: 1px solid ;
	background: #2691d9;
	border-radius: 25px;
	font-size: 18px;
	color: #e9f4fb;
	font-weight: 600;
	cursor: pointer;
	outline: none;
}
input[type="submit"]:hover
{
	border-color: #2691d9;
	transition: .5s;
}
.center
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	height: 250px;
   background-image: linear-gradient(to bottom right,#ff3300,#ff4dff);
    border-radius: 10px;
}
.center h1
{
	text-align: center;
	padding: 0 020px 0;
	font-size: 30px;
	/*border-bottom: 1px solid silver;*/
}
.center form
{
	padding: 0 40px;
	box-sizing: border-box;
}
form .txt
{
	position: relative;
	border-bottom: 2px solid #adadad;
	margin: 30px 0;
}
.txt input
{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border:none;
    background: none;
    outline: none;
}
.txt label
{
	position: absolute;
	top: 50%;
	left: 5px;
	color: blue;
	transform: translateY(-50%);
	font-size: 18px;
	pointer-events: none;
    transition: .5s;
}
.txt span::before
{
    content: '';
    position: absolute;
    top:40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2691d9;
}
.txt input:focus ~label,
.txt input:valid ~label
{
	top: -5px;
	color:#3333ff;
}
.txt input:focus ~span::before,
.txt input:valid ~span::before
{
	width: 100%;
}


</style>
</head><?php
		if(!empty($error_message)) {
	?>
	<div class="message error_message"><?php echo $error_message; ?></div>
	<?php
		}
	?>
<body><div class="center">
	

<form name="frmUser" method="post" action="">
	<div class="tblLogin">
		<?php 
			if($success == 1) { 
		?>
		<h1>Enter OTP</h1>
		
		<div class="txt">
			<input type="text" name="otp"  class="login-input"  required autocomplete="off">
			<span></span>
			<label>Check your email for the OTP</label>
		</div>
		<input type="submit" name="submit_otp" value="Submit" class="btnSubmit">
		<?php 
			} else if ($success == 2) {
				?>
              <script >
                location.replace("index.php");
               </script>
               <?php
			    
        ?>
	
		<?php
			}
			else {
		?>
		
		
			<h1>Enter Your Login Email</h1>
		     <div class="txt">
		     	<input type="text" name="email" class="login-input" required autocomplete="off">
		     <span></span>
		     <label>Enter your Email id use in registration</label></div>
		       <!-- <div class="tableheader"> --><input type="submit" name="submit_email" value="Submit" class="btnSubmit"><!-- </div> -->
		
		<?php 
			}
		?>
	</div>

</form></div>
</body></html>
