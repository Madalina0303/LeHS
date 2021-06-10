<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/beginnerC.css">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <title>CSS-Beginner</title>
</head>

<body>
    <header>
        <img src="../../public/images/designer.png" class="pers" alt="pers">

        <div class="hi">
            <p> Hi, i am the designer of the island and I will help you for this level
                ...
            </p>
        </div>
    </header>
    <div class="lnk">
        <button type="button" class="btnn" onclick="document.location='menu.html'">
            <img src="../../public/images/homeWh.png" alt="home button">
        </button>
        <button type="button" class="btnn" onclick="document.location='profile.html'">
            <img src="../../public/images/prf.png" alt="profil button">
        </button>
        <button type="button" class="btnn" onclick="document.location='levels.html'">
            <img src="../../public/images/level1.png" alt=" level button">
        </button>

    </div>
    <div class="tot">
        <div id="board">
            <div id="animal">

                <!-- <div class="obiect1"></div> -->

            </div>

            <!-- <div id="hrana" style="justify-content:space-around;"> -->
            <div id="hrana">
                <!-- <div class="obiect2"></div> -->

            </div>


        </div>
        <div class="cerinta">
           <p class="enunt"></p>
            <div id="cod">
                <button type="submit" class="Verify">Verify</button>
                <button type="button" class="next" >Next</button>
            </div>
        </div>
    </div>
    <?php
        $level=htmlspecialchars($_GET["level"]);
        $challenge=htmlspecialchars($_GET["chlg"]);
        $levelL= "\"".$level."\"";
        $challengeL="\"".$challenge."\"";
   ?>
    <script>
     var level=<?php echo $levelL;?>;
     var challenge=<?php echo $challengeL;?>;
     </script>


<script src="../controllers/style.js"></script> 
    <script src="../controllers/move.js"></script>
   
</body>

</html>