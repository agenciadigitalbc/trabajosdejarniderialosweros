<?php

require("./PHPMailer/src/PHPMailer.php");
require("./PHPMailer/src/SMTP.php");

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.pacificsunrealestate.com.mx";
 $mail->Port = 465; //465  or 587
 $mail->IsHTML(true);
 $mail->Username = "info@pacificsunrealestate.com.mx";
 $mail->Password = "PacificSunRealEstate";
 $mail->SetFrom("info@pacificsunrealestate.com.mx");
 $mail->Subject = "Contacto Desde : Pacific Sun Real State";
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 
 $mail->Body = "Nombre: {$name}  <br> Correo Electronico: {$email} <br> Asunto : {$subject} <br> Mensaje : {$message}";
 $mail->AddAddress("info@pacificsunrealestate.com.mx");
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 echo "OK";
 }

 ?>