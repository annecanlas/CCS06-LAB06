<?php
$type = $_POST['type'];
$name = $_POST["complete_name"];
$email = $_POST["email"];
$message = $_POST["message"];
$satisfaction_level = $_POST["satisfaction_level"];

Echo "<h1> Thank you! </h1>";
Echo "Received " . $type . " message from " . $name ."(" . $email . ")";
Echo "<br><br>" . $message;
Echo "<br><br> Satisfaction Level: " .  $satisfaction_level;

?>