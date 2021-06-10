<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/levels.css">
    <title>Levels</title>
</head>

<body>
    <div class="inc">
        <img src="../../public/images/html.jpg" alt="ice" class="ice" style=" height: 400px;">
        <h1 class="anim">HTML & CSS LEVELS
            <a href="#next">
                <img src="../../public/images/jos.png" alt="next" class="next">
            </a>
        </h1>
    </div>
    <div class="lnk">
        <button type="button" class="btnn" onclick="document.location='menu.php'">
            <img src="../../public/images/homeWH.png" alt="home button">
        </button>
        <button type="button" class="btnn" onclick="document.location='profile.php'">
            <img src="../../public/images/prf.png" alt="profil button">
        </button>
    </div>
    <!-- <div class="html"> -->
    <div class="level">
        <?php
        require_once 'User.class.php';
        session_start();
        $verifUser = new User();
        $progress = $verifUser->getHtmlLevel($_SESSION['id']);


        //      se ia din bd nivelul curent si provocarea  se transmite in link  -->
        //     in fct de nivelul luat din baza de date vor fi activate butoanele 
        //    start sa se transforme in continue daca i inceput dar nu-i finalizat iar daca e finalizat review
        $levelBD = $progress['level'];
        $chlgBD = $progress['challenge'];
      
        //sa faca niste calcule sa vada cum e cu completeted
        // pentru nivelele <=cel curent alea vor fi 100
        // pentru nivelele > cel curent alea vor fi blocate si 0 la suta
        // pentru cel curent se imparte (100 la nr de provocari existente) * nr provocari facute +  (100 / nr de provocari existente/4)*cate is facute
        // trebuie facute if uri pt punctaj
         $progressCss=$verifUser->getCssLevel($_SESSION['id']);
         $levelBDCss = $progressCss['level'];
         $chlgBDCss = $progressCss['challenge'];
       
        ?>
        <div class="dot1">
            <div class="levl__bgn">
                <h3> Beginner </h3>
                <p> Let's go to do some easy exercises together. In this step you can test your basic knowledge
                    about
                    HTML</p>
            </div>
            <div class="overlay1">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
               
                 if($levelBD=="bh")
                  {$chlg = $chlgBD; // dupa caz
                    $compl=33*($chlg-1);
                    $curent="bh";
                  }
                  else{
                     $chlg=1;
                     $compl=100;
                     }
                ?>

                <a href="beginnerH.php?level=bh&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                <p class="completed"> Completed: <?php echo $compl?>% </p>
            </div>

        </div>

        <div class="dot2">
            <div class="levl__intr">
                <h3> Intermediate </h3>
                <p>Descrierea acestui nivel </p>
            </div>
            <div class="overlay2">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
                if($levelBD=="ih"){
                  $chlg = $chlgBD; // dupa caz
                  $compl=33*($chlg-1);
                  $curent="ih";
                }
                else{
                    if(isset($curent) && $curent=="bh")
                       $compl=0;
                    else
                       $compl=100;   
                     $chlg=1;
                    
                  }
                ?>
                <a href="beginnerH.php?level=ih&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                <p class="completed"> Completed: <?php echo $compl; ?>% </p>
            </div>
        </div>
        <div class="dot3">

            <div class="levl__adv">
                <h3> Advanced </h3>
                <p>Cateva cuv de spus despre bla bla bla</p>

            </div>
            <div class="overlay3">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
                if($levelBD=="ah"){
                $chlg = $chlgBD; // dupa caz
                $compl=33*($chlg-1);
                //problematic aici
                if($chlg==4   )
                $compl=100;
                $curent="ah";
                 }
                else{
                  if($curent=="ih" || $curent=="bh")
                   $compl=0;
                   $chlg=1;
                }
                ?>
                <a href="beginnerH.php?level=ah&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                <p class="completed"> Completed: <?php echo $compl; ?>% </p>
            </div>
            <div id="next">

            </div>
        </div>
        <!-- <img src="../../public/images/sper.png">
        <img src="../../public/images/sper.png">
        <img src="../../public/images/sper.png"> -->
    </div>
    <!-- </div> -->

    <div class="css">
        <div class="levelCss">
            <div class="dot1Css">
                <div class="levl__bgnCss">
                    <h3> Beginner </h3>
                    <p> Let's go to do some easy exercises together. In this step you can test your basic knowledge
                        about CSS.
                    </p>
                </div>
                <div class="overlay1Css">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
               
                //  if($levelBDCss=="bc")
                //   $chlg = $chlgBDCss; // dupa caz
                //   else
                //      $chlg=1;

                if($levelBDCss=="bc")
                {$chlg = $chlgBDCss; // dupa caz
                  $compl=33*($chlg-1);
                  $curent="bc";
                }
                else{
                   $chlg=1;
                   $compl=100;
                   }
                ?>

                <a href="beginnerC.php?level=bc&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                    <p class="completed"> Completed:<?php echo $compl?>% </p>
                </div>

            </div>
            <div class="dot2Css">
                <div class="levl__intrCss">
                    <h3> Intermediate </h3>
                    <p> Ieii, ai trecut mai departe...
                    </p>
                </div>
                <div class="overlay2Css">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
               
                //  if($levelBD=="ic")
                //   $chlg = $chlgBDCss; // dupa caz
                //   else
                //      $chlg=1;
                if($levelBDCss=="ic"){
                    $chlg = $chlgBDCss; // dupa caz
                    $compl=33*($chlg-1);
                    $curent="ic";
                  }
                  else{
                      if(isset($curent) && $curent=="bc")
                         $compl=0;
                      else
                         $compl=100;   
                       $chlg=1;
                      
                    }
                ?>

                <a href="beginnerC.php?level=ic&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                    <p class="completed"> Completed: <?php echo $compl?>% </p>
                </div>

            </div>
            <div class="dot3Css">
                <div class="levl__advCss">
                    <h3> Advanced </h3>
                    <p> Super... ai terminat.
                    </p>
                </div>
                <div class="overlay3Css">
                <?php
                // verif daca levelul curent din bd este bh, daca da atunci provocarae  va fi aia tot din bd
                // daca deja a trecut de categoria asta atunci categori va fi cea prima a.i daca reintra va naviga prin tot ce a rezolvat 
               
                //  if($levelBD=="ac")
                //   $chlg = $chlgBDCss; // dupa caz
                //   else
                //      $chlg=1;
                if($levelBDCss=="ac"){
                    $chlg = $chlgBDCss; // dupa caz
                    $compl=33*($chlg-1);
                    //problematic aici
                    if($chlg==4   )
                    $compl=100;
                    $curent="ac";
                     }
                    else{
                      if($curent=="ic" || $curent=="bc")
                       $compl=0;
                       $chlg=1;
                    }
                ?>

                <a href="beginnerC.php?level=ac&chlg=<?php echo $chlg ?>" class="btn">
                    Start
                </a>
                    <p class="completed"> Completed: <?php echo $compl?>%  </p>
                </div>

            </div>



        </div>
    </div>
    <div class="footer">
        <div class="footer__text">
            <p class="mor"> Adventure starts with us...</p>
        </div>
        <div class="footer__img">

            <div style="width:40%; color:thistle ; font-size:26px; padding:1em; margin-left:3%;background-color: rgba(0, 2, 7, 0.438); margin-top: 5%; size:40px;">Our team want to help you to learn from basic to advanced in html and css
                ....................
                Our team want to help you to learn from basic to advanced in html and css
                MAKE IT EASY
            </div>

            <img src="../../public/images/complicated.png" class="ursSt" alt="urs">

            <!-- <img src="../../public/images/complicated.jpg" class="ursSt" alt="urs"> -->


            <!-- <img src="../../public/images/dexter.jpg"> -->
        </div>

</body>
<!-- <script src="../controllers/map.js"></script> -->

</html>