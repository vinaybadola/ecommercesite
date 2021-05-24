<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location;login.php');
}


?>
<html>
<head>
<title> Home Page</title>

<link rel="stylesheet" type = "text/css" href= " style.css">
<link rel="stylesheet" type = "text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css ">

</head>
<body>
<div class="class-container">



<a class = " float-right" href="logout.php">logout</a>

    <h1>  WELCOME <br><?php echo $_SESSION['username'];?> </h1>
    <button> back to Home page</button>
    </div>
    

</body>
</html>