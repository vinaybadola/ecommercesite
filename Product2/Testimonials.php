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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
</head>
<body>
<div class="container">

<section class="products">

   <h1 class="heading">Messages From User </h1>

   <div class="box-container">

      <?php
     
        $query = "select * from `NewFeature`";
        $result = $conn->$query($query);

        if($result -> num_rows>0){
           while($srow = $result->fetch_assoc()){
        
           
             echo $fetch_product['name']; 
             echo $fetch_product['email']; 
             echo $fetch_product['message']; 
            
           }
        }
      

        
    
      ?>

</div>

</section>

</div>
</body>
</html>