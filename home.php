<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="nav.css" />
</head>
<style>
body{
  background-color: rgb(5, 5, 67);
}
.head{
color: white;
font-size: 36px;
}
.content{
    color: white;
font-size: 18px;
}
p{
  font-family: Arial, Helvetica, sans-serif;
}
 .title {
font-size: 70px;
color: aliceblue;
  font-family: "Audiowide", sans-serif;
  text-shadow: 5px 5px rgb(91, 182, 213);
} 
.subhead{
    color: white;
    font-size: 20px;
}
.left{
height: 350px;
}
.mid{
width: 600px;
height: 350px;
}
.bgimg{
    display: grid;
    position: relative;
    grid-template-columns: repeat(12, 1fr);
}
img:hover{
    cursor: pointer;
}
.endnote{
    font-size: 20px;
    color: white;
}
button{
    color: black;
    background-color: gold;
    position: absolute;
    left: 45%;
    height: 50px;
    width: 150px;
    border-radius: 50px;
    
}
button:before{
  position: absolute;
  content: '';
  top: -2px;
  left: -2px;
  height: calc(100% + 4px);
  width: calc(100% + 4px);
  border-radius: 5px;
  z-index: -1;
  opacity: 0;
  filter: blur(5px);
  background-color: goldenrod;
  background-size: 400%;
  transition: opacity .3s ease-in-out;
  animation: animate 20s linear infinite;
}
button:hover:before{
  opacity: 1;
}
button:hover:active{
  background: none;
}
button:hover:active:before{
  filter: blur(2px);
}
@keyframes animate {
  0% { background-position: 0 0; }
  50% { background-position: 400% 0; }
  100% { background-position: 0 0; }
}
</style>
<style>     
    

  nav{
      position: relative;
      margin: 0px auto 0;
      width: 1000px;
  height: 50px;
  background: #145faa;
  border-radius: 8px;
  font-size: 0;
  box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
  }
  nav a{
  font-size: 15px;
  text-transform: uppercase ;
  color: white;
  text-decoration: none;
  line-height: 50px;
  position: relative;
  z-index: 1;
  display: inline-block;
  text-align: center;
  }
  nav .animation{
  position: absolute;
  height: 100%;
  top: 0;
  z-index: 0;
  background: #1abc9c;
  border-radius: 8px;
  transition: all .5s ease 0s;
  }
  nav a:nth-child(1){
      width: 100px;
  }
  nav .start-home, a:nth-child(1):hover~.animation{
      width: 100px;
      left: 0;
  }
  nav a:nth-child(2){
      width: 110px;
  }
  nav a:nth-child(2):hover~.animation{
      width: 100px;
      left: 110px;
  }
  nav a:nth-child(3){
      width: 100px;
  }
  nav a:nth-child(3):hover~.animation{
      width: 100px;
      left: 210px;
  }
  nav a:nth-child(4){
      width: 180px;
  }
  nav a:nth-child(4):hover~.animation{
      width: 180px;
      left: 310px;
  }
  nav a:nth-child(5){
      width: 120px;
  }
  nav a:nth-child(5):hover~.animation{
      width: 120px;
      left: 490px;
  }
  nav a:nth-child(6){
      width: 150px;
      
  }
  nav a:nth-child(6):hover~.animation{
      width: 150px;
      left: 640px;
  }
  nav a:nth-child(7){
      width: 150px;
      
  }
  nav a:nth-child(7):hover~.animation{
      width: 150px;
      left: 790px;
  }
    </style>
<body>
    <nav>
    <a class="active" href="home.php">Home</a>
    <a href="submissionform.php">Submit here </a>
    <a href="connect.html">Contact</a>
    <a href="client_reviews.html">Client Feedback</a>
    <a href="services.html">About</a>
    <a href="login.php">LOGIN</a> 
    <a href="#"></a> 
      
<div class="animation start-home"></div>
    </nav>
    <h1 class="title" align="center">Annsylum Writers</h1>
<div>
    <h1 class="head" align="center" >Doing Your Homework for You Right Here and Right Now!</h1>
    <p class="content" align="center">Our Assignment writing platform is here to help you do your homework.</p>
      <p class="content" align="center" >Get immediate homework assistance delivered by skilled academic writing experts.</p>
</div>
<h3 class="subhead" align="center">Urgent Deadline. Any Subjet. Quality Guaranteed.</h3>
    <div class="bgimg">
    
    <div class="lefthand">
<img class="left" src="https://justdomyhomework.com/static/img/homepage/hand-left-promo.svg" alt="">
    </div>

    <div class="laptop">
        <img class="mid" src="https://justdomyhomework.com/static/img/homepage/laptop.png" alt="">
            </div>
    </div>
    <marquee
  class="marq"
 direction="left"
 loop=""
scrollamount=20>
<img src="https://quotefancy.com/media/wallpaper/3840x2160/1742801-Sam-Walton-Quote-We-re-all-working-together-that-s-the-secret.jpg" width=610px height=400px>
<img src="https://th.bing.com/th/id/R.dba66e5846ef6c786b315164ede218c6?rik=a3zZNuXyVquuiw&riu=http%3a%2f%2fwww.lovethispic.com%2fuploaded_images%2f194512-Work-Station.jpg&ehk=Ww9sNiqW%2bZTmsdLoovkKTrgB%2bdTjZFKUSA1b6fhC%2fuQ%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width=610px height=400px>
   
<img src="https://i.pinimg.com/originals/01/38/4c/01384ceaedab1bd7896862c9e7f172ee.jpg" width=610px height=400px>
<img src="https://i.pinimg.com/originals/09/41/14/094114850e05ed051c10f2db3c81adc5.jpg"width=610px height=400px>
</marquee>
<div>
    <p class="endnote" align="center"><b>Get Your First Assignment Done For Free!</b></p>
    <a href="/Annsylum Writers/submissionform.php">
    <button type="button"><b>Do Me A Favour</b></a></button>
</div>
</body>
</html>