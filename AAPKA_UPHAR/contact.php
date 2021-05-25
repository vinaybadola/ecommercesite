<?php

$conn=mysqli_connect("localhost","root","","contactform") or die("connection faild");


 $user = $_POST['user'];
 $email = $_POST['email'];
 $message = $_POST['message'];

$sql="INSERT INTO contactinfo(user, email, message_txt) VALUES ('{$user}','{$email}','{$message}')";

$result = mysqli_query($conn, $sql) or die("query faild");

if ($result) {
    echo "Thanks for Contacting us.";
}



?>