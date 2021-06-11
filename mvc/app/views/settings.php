<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="icon" href="https://cdn.nohat.cc/thumb/f/350/5978768157966336.jpg" type="image/x-icon" sizes="18x18">


    <link rel="stylesheet" href="../../public/css/settings.css">
</head>

<body>

    <div class="head">
        <div class="game-title">
            <img src="../../public/img/thumbs/title1.png" alt="title" >
        </div> 
    
        <h1>Ⓢⓔⓣⓣⓘⓝⓖⓢ</h1> 
    
        <div class="exit-btn">
                <img src="../../public/img/exit2.png" alt="exit" onclick="javascript:window.location='http://127.0.0.1:5500/mvc/app/views/menu.html'">
        </div> 

    </div>

        <audio id="nyan" src="https://designshack.net/tutorialexamples/html5-audio-player/media/evidence-song.mp3" preload="metadata" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="btns">
         <a class="btn" id="nyan-btn">Sound</a>

         <ul class="social">
            <li id="fr_click" class="button_lang current_lang">French</li>
            <li id="en_click" class="button_lang">English</li>
                </ul>
        </div>


         <script src="../controllers/settings.js"></script>
 
    
</body>
</html>