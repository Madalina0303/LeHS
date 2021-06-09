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
        <img src="../../public/images/stintific.png" class="pers" alt="pers">

        <div class="hi">
           <p> Hi, i am the Gadget Guy, the scientist of the island and I will help you for this level
            lalal
        </p>
        </div>
    </header>
    <div class="lnk">
        <button type="button" class="btnn" onclick="document.location='menu.html'">
        <img src="../../public/images/homeWh.png" alt="home button" >
    </button>
    <button type="button" class="btnn" onclick="document.location='profile.html'">
        <img src="../../public/images/prf.png" alt="profil button" >
    </button>
    <button type="button" class="btnn" onclick="document.location='levels.html'">
        <img src="../../public/images/level1.png" alt=" level button" >
    </button>
    </div>
    <div class="require"></div>
    <div class="exercitiu">
      
      
        <div class="cod">
            
            <div class="continut">
            
            <!-- <p> &lt;p&gt; Un paragraf &lt;&#47;p&gt; </p>
            <textarea id="ln1" autofocus></textarea> -->
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
       
        <div class="cod">
            
            <div class="continut">
            
            <!-- <p> &lt;p&gt; Un exercitiu ceva &lt;&#47;p&gt; </p>
            <textarea id="ln2" ></textarea> -->
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
        
        <div class="cod">
            
            <div class="continut">
            
            <!-- <p> &lt;p&gt; Altceva &lt;&#47;p&gt; </p>
            <textarea id="ln3" ></textarea> -->
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
        
        <div class="cod">
            
            <div class="continut">
            
            <!-- <p> &lt;p&gt; Text text text &lt;&#47;p&gt; </p>
            <textarea id="ln4"></textarea> -->
            </div>
            <button type="submit" class="Verify">Verify>></button>
            <button type="button" class="next" > Next</button>
            <!-- se salveaza in bd progresul si schimbam noi url la provocarae urma respectiv la nivelul urm  -->
        </div>
       
      
    </div>
    <?php
      // splituim aicea linkul sa vedem ce  nivel este si ce provocare
      //  le dam ca  variabile la js si de acolo se schimba dupa caz imaginea de fundal respectiv exercitiile
     
      $level=htmlspecialchars($_GET["level"]);
      $challenge=htmlspecialchars($_GET["chlg"]);
      echo 'url!!!!!!!:';
      echo $level;
      echo '<br>';
      echo $challenge;
       $levelL= "\"".$level."\"";
       $challengeL="\"".$challenge."\"";
      ?>
      <!-- <script> 
       let level=<?php echo $levelL;?>
       
      </script>
      <script> 
       
       var challenge=<?php echo $challengeL;?>
      
      </script>
     -->
     <script>
     var level=<?php echo $levelL;?>;
     var challenge=<?php echo $challengeL;?>;
     </script>
    <script src="../controllers/style.js"></script>
    <script src="../controllers/lock.js"></script>
   
</body>

</html>
