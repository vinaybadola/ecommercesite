<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive footer design codepen</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;

    padding-top: 10px;
    color: #fff;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 5px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}
    </style>
</head>
<body>
    <footer>
       
        <div class="footer-bottom">
            <p>copyright &copy;<?php   $year = date ("Y");  echo $year; ?>   E-commerce </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="../MainDir/index.php">Home</a></li>
                        <li><a href="../About/about.php">About</a></li>
                        <li><a href="../ContactUs/index.php">Contact</a></li>
                        
                      </ul>
                    </div>
        </div>

    </footer>
</body>
</html>
