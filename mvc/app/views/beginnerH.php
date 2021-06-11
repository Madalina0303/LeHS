<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/beginnerH.css">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <title>HTML-Beginenenjkbf</title>
</head>

<body>
    <header>
        <img src="../../public/images/parot.png" class="pers" alt="pers">

        <div class="hi">
            <p> Hi, i am the Parot Guy, the happiest animal from the jungle.
            </p>
        </div>
    </header>
    <div class="lnk">
        <!-- <button type="button" class="btnn" onclick="document.location='menu.html'"> -->
        <a href="menu.php">
            <div class="btnn">
            <img  src="../../public/images/homeWh.png" alt="home button">
            </div>
        </a>
        <!-- </button> -->
        <!-- <button type="button" class="btnn" onclick="document.location='profile.html'">
            <img src="../../public/images/prf.png" alt="profil button">
        </button>
        <button type="button" class="btnn" onclick="document.location='levels.html'">
            <img src="../../public/images/level1.png" alt=" level button">
        </button> -->
        <a href="profil.php">
            <div class="btnn">
            <img  src="../../public/images/prf.png" alt="profil button">
            </div>
        </a>
        <a href="levels.php">
            <div class="btnn">
            <img  src="../../public/images/level1.png" alt="level button">
            </div>
        </a>
    </div>
    <div class="require"></div>
    <div class="exercitiu">


        <div class="cod">

            <div class="continut">


            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>

        <div class="cod">

            <div class="continut">

            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>

        <div class="cod">

            <div class="continut">


            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>

        <div class="cod">

            <div class="continut">

            </div>
            <button type="submit" class="Verify">Verify>></button>
            <button type="button" class="next"> Next</button>
            <!-- se salveaza in bd progresul si schimbam noi url la provocarae urma respectiv la nivelul urm  -->
        </div>


    </div>
    <?php
    // splituim aicea linkul sa vedem ce  nivel este si ce provocare
    //  le dam ca  variabile la js si de acolo se schimba dupa caz imaginea de fundal respectiv exercitiile

    $level = htmlspecialchars($_GET["level"]);
    $challenge = htmlspecialchars($_GET["chlg"]);
   
    $levelL = "\"" . $level . "\"";
    $challengeL = "\"" . $challenge . "\"";
    ?>
    <!-- <script> 
       let level=<?php echo $levelL; ?>
       
      </script>
      <script> 
       
       var challenge=<?php echo $challengeL; ?>
      
      </script>
     -->
    <script>
        var level = <?php echo $levelL; ?>;
        var challenge = <?php echo $challengeL; ?>;
    </script>
    <script src="../controllers/style.js"></script>
    <script src="../controllers/lock.js"></script>

</body>

</html>