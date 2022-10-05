<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
 
    <!-- Fontawesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
     
   
  
  
  
  
  </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Bapugram , Rishikesh</div>
          <div class="text-two">Uttrakhand</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 7457819144</div>
        
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">vinaybadola46@gmail.com</div>
          <div class="text-two">botvinay416@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any  quries related to this Site, you can send me message from here. It's my pleasure to help you.</p>
      
      
        <form action="process-form.php" method="post">
        <div class="input-box">
          <input type="text"name = "name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
          <input type="text" name = "message"placeholder="Enter your message" required>
        </div>
        <button class="btn btn-success my-2 my-sm-0" type="submit">SEND</button>
       
      
    </div>
    </div>
  </div>
  </form>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
