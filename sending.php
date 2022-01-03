<?php

require_once('./controlles/Captcha.php');
if (!isset($_POST['email'])) { 
  $message .= "\nName: " . $_POST['name'];
  $message .= "\nEmail: " . $_POST['email'];
  $message .= "\nPhone: " . $_POST['phone'];
  $message .= "\nMessage: \n" . $_POST['message'];
  $destiny = "Jose@smart-truck.us";
  $sender = $_POST['email'];
  $asunto = "Sending by: " . $_POST['name'];
  mail($destiny, $asunto, $message, "FROM: $sender");
}

$captcha = new Captcha();


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
  <meta http-equiv=refresh content="5; index.php">
  <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />
  <title>Smart-Truck</title>
</head>

<body class="bodySent">
  <main class="main2">
    <div class="wrapper2">
      <?php
      
      if($captcha->checkCaptcha($_POST['h-captcha-response'])){
        echo"
      <section class='sent'>
        <div class='brand'>
          <img src='./assets/logo.png' alt='Logo'>
        </div>
        <div class='success'>
          <img src=''./assets/fingerUp.png' alt='Finger Up Image'>
        </div>
        <h1>Muchas Gracias por tu consulta!. </h1>
        <h2>En breve nos pondrenos en Contacto.</h2>
      </section>";
      }else{
          echo"
      <section class='sent'>
        <div class='brand'>
          <img src='./assets/logo.png' alt='Logo'>
        </div>
        <div class='success'>
          <img src=''./assets/fingerDown.png' alt='Finger Down Image'>
        </div>
        <h1>Captcha incorrecto, volvé a intentarlo. </h1>
        
      </section>";
      }
      ?>
    </div>
  </main>
  <script src="./js/main.js"></script>
</body>

</html>


