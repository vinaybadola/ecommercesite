<?php

$conn=mysqli_connect("localhost","root","","NEMW") or die("connection faild");

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
      
      $select_products = mysqli_query($conn, "SELECT * FROM `NewFeature`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <div class="box">  
           <?php echo $fetch_product['name']; ?> <br>
           <?php echo $fetch_product['email']; ?>   <br>
           <?php echo $fetch_product['message']; ?> <br>
           
         </div>
         
     <?php
         }
      }
      else {
        echo"No Records Found";
      }
    
      ?>
        

</div>

</section>

</div>
</body>
</html>