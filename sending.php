

<?php
if (!isset($_POST['email'])) {

}else{
  $message="Form Message ";
  $message.= "\nName: ". $_POST['name'];
  $message.= "\nEmail: ".$_POST['email'];
  $message.= "\nPhone: ". $_POST['phone'];
  $message.= "\nMessage: \n".$_POST['message'];
  $destiny= "alexandra220790@gmail.com";
  $sender = $_POST['email'];
  $asunto = "Sending by: ".$_POST['name'];
  mail($destiny,$asunto,$message,"FROM: $sender");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send</title>
</head>
<body>
  <h1>
    <?php
      echo "Mensaje enviado satisfactoriamente."
    ?>
  </h1>
</body>
</html>