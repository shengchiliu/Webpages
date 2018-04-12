<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

$myfile = fopen("messages.txt", "a") or die("Unable to open file!");
$txt = "\n" . $name . "\n" . $email  . "\n" . $message . "\n";
fwrite($myfile, $txt);
fclose($myfile);
header("Location:http://www.shengchiliu.com");
?>
