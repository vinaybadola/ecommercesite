<?php

$conn=mysqli_connect("localhost","root","","NEMW") or die("connection faild");


 $name = ($_POST['name']);
 $email = ($_POST['email']);
 $message = ($_POST['message']);

$sql="INSERT INTO NewFeature(name, email ,  message) VALUES ('{$name}','{$email}','{$message}')";

$result = mysqli_query($conn, $sql) or die("query faild");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
   
</head>
<body>
    <button class= "bt"> <a href="../MainDir/user_index.php"></a></button>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol>

    <script>
        setTimeout(function(){
            window.location.href = '../MainDir/user_index.php';
         }, 10000);
         alert("Wait! while redirecting You to main page");
    </script>
</body>
</html>