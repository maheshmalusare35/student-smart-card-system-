<?php 
 function sendOTP($email,$otp) {
  require('phpmailer/class.phpmailer.php');
  require('phpmailer/class.smtp.php');
 
  $message_body = "One Time Password for Student smart card system forgot password authentication is:<br/><br/>" . $otp;
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = TRUE;
  $mail->SMTPSecure = 'tls'; // tls or ssl
  $mail->Port     = "587";
  $mail->Username = "elibrarymanagement100@gmail.com";
  $mail->Password = "Elibrary@2020#2021";
  $mail->Host     = "smtp.gmail.com";
  $mail->Mailer   = "smtp";
  $mail->SetFrom("elibrarymanagement100@gmail.com", "E-library Management");
  $mail->AddAddress($email);
  $mail->Subject = "OTP to Login";
  $mail->MsgHTML($message_body);
  $mail->IsHTML(true);  
  $result = $mail->Send();
  return $result;
 }
?>

