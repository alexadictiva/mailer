<?php
if (!isset($_POST['email'])) {
} else {
  $message = "Form Message ";
  $message .= "\nName: " . $_POST['name'];
  $message .= "\nEmail: " . $_POST['email'];
  $message .= "\nPhone: " . $_POST['phone'];
  $message .= "\nMessage: \n" . $_POST['message'];
  $destiny = "alexandra220790@gmail.com";
  $sender = $_POST['email'];
  $asunto = "Sending by: " . $_POST['name'];
  mail($destiny, $asunto, $message, "FROM: $sender");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv=refresh content="10; index.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />
  <title>Sent Message</title>
</head>

<body class="bodySent">
  <main class="main2">
    <div class="wrapper2">
      <section class="sent">
        <div class="brand">
          <img src="./assets/logo.png" alt="Finger Up Image">
        </div>
        <div class="success">
          <img src="./assets/fingerUp.png" alt="Finger Up Image">
        </div>
        <h1>Muchas Gracias por tu consulta!. </h1>
        <h2>En breve nos pondrenos en Contacto.</h2>
      </section>
    </div>
  </main>
  <script src="./js/main.js"></script>
</body>

</html>