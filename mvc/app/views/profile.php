<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Profile</title>
    <link rel="icon" href="https://cdn.nohat.cc/thumb/f/350/5978768157966336.jpg" type="image/x-icon" sizes="18x18">


    <link rel="stylesheet" href="../../public/css/profile.css">
</head>
<body>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header>
  <div class="game-title">
      <img src="../../public/img/thumbs/title1.png" alt="title">
  </div>

  <div class="exit-btn">
    <img src="../../public/img/exit2.png" alt="exit" onclick="javascript:window.location='http://127.0.0.1:5500/mvc/app/views/menu.html'">
</div> 
  </header>

<div class="cards">
<div class="card">
  <?php

//    if (($gitUser['$avatar'])){
//      $poza=$gitUser[$avatar];
//  echo '<img src=$poza alt="Penguin pirate" style="width:100%">';
require_once 'User.class.php';
$var=session_start();
$poza1=$_SESSION['poza'];
$poza2=substr($poza1,1,strlen($poza1)-2);
$nume=$_SESSION['nume'];
$verifUser=new User();
$progressH = $verifUser->getHtmlLevel($_SESSION['id']);
$progressC = $verifUser->getCssLevel($_SESSION['id']);
echo $progressC['level'];
echo $progressC['challenge'];
echo $progressH['level'];
echo $progressH['challenge'];
$procHtml=($verifUser->getHtmlPunctaj($_SESSION['id']))/3;
$procCss=($verifUser->getCssPunctaj($_SESSION['id']))/3;
$progAll=($procCss+$procHtml)/2;
?>

<img src="<?php echo $poza2?>" style="width:100%">
  <h1><?php echo $nume ?></h1>
  <p class="title">Level:4</p>
  <p>HTML Expert</p>
  <p>CSS Intermediar</p>
  <p>ALL Intermediar</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onclick="javascript:window.location='http://127.0.0.1:5500/mvc/app/views/wheel.html'">Play</button></p>
</div>

<div class="card1">
  
    <h1 >Captain Rockhopper</h1>
    <p class="title">Level:<span>4</span></p>

  <div class="rings">
   <div class="percent1">
      <svg class="svg-ring">
        <circle cx="70" cy="70" r="70"></circle>
        <circle cx="70" cy="70" r="70"></circle>
      </svg>
      <div class="number">
        <h1 class="head">75<span>%</span></h1>
      </div>
</div>
  
</div>

    <p class="title1">Progress Bar</p>
      <li>
        
        <p style="width:80%" data-value="80">HTML</p>
        <progress max="100" value="80" class="html5">
          <div class="progress-bar">
            <span style="width: 80%">80%</span>
          </div>
        </progress>
        
        <p style="width:60%" data-value="60">CSS</p>
        <progress max="100" value="60" class="css3">
          <div class="progress-bar">
            <span style="width: 60%">60%</span>
          </div>
        </progress>
        
        <p style="width:50%" data-value="50">ALL</p>
        <progress max="100" value="50" class="jquery">
          <div class="progress-bar">
            <span style="width: 50%">50%</span>
          </div>
        </progress>
        
      </li>


      
    
</div>

</div>
    
</body>
</html>