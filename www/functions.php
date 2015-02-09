<?php
if(isset($_POST['contactSubmit'])) {
  $first_name = $_POST['contactFirstName'];
  $last_name = $_POST['contactLastName'];
  $full_name = "$first_name $last_name";
  $phone = $_POST['contactPhone'];
  $email = $_POST['contactEmail'];
  $message = $_POST['contactMessage'];

  if(!empty($full_name) && !empty($phone) && !empty($email) && !empty($message)) {
    $modtager = "info@dosh.dk";
    $emne = "Portfolio Kontakt (www.dosh.dk)";
    $besked = "Name: $full_name\nPhone: $phone\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit";
    mail($modtager, $emne, $besked, $headers);

    echo "<script>alert('Your message has been send! :)');</script>";
  } else {
    echo "<script>alert('It seems like you forgot to fill out all fields');</script>";
  }

}
?>
