<?php



if(isset($_POST['submit'])){
$to = "ideallegalassistants@gmail.com";
$name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$append = "Enquiry By ".$name.PHP_EOL;
$message = $append.$_POST['message'];

$message2 = "Here's your copy".PHP_EOL.$_POST['message'];



$headers = "From:" . $from_email;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
mail($from_email,$subject,$message2,$headers2);

header("location:contact.html");

}



