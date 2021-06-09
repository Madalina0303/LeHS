<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/beginnerC.css">
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
        <div id="board">
            <div id="broasca">

                <div class="obiect1"></div>

            </div>

            <div id="nufar" style="justify-content:space-around;">

                <div class="obiect2"></div>

            </div>
        </div>

        <button type="submit" class="Verify">Verify>></button>
        <script src="../controllers/move.js"></script>
</body>

</html>