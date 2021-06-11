<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeHS</title>
    <link rel="icon" href="https://cdn.nohat.cc/thumb/f/350/5978768157966336.jpg" type="image/x-icon" sizes="18x18">
    <link rel="stylesheet" href="../../public/css/index.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body class="main-body">

    <div class="hero">


        <div class="head">
            <div class="game-title">
                <img src="../../public/img/thumbs/title1.png" alt="title ">
            </div>

            <div class="btn-icons">
                <img src="../../public/img/thumbs/gallery.jpg" alt="gallery" onclick="javascript:window.location='gallery.php'">
                <img src="../../public/img/thumbs/play.png" alt="play" onclick="javascript:window.location='menu.php'">
            </div>
        </div>


        <div class="wrapper">
            <div class="characters">
                <img src="../../public/images/maimuta.png" alt="character ">
            </div>

            <div class="form-box">

                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <!-- <img src="../../public/img/thumbs/fb.png" alt="facebook"> -->
                    <a href="https://github.com/login/oauth/authorize?client_id=828bd86cb437a36d7c6a"> <img src="../../public/img/thumbs/gh.png" alt="github"></a>
                    <!-- <a href=""> <img src="../../public/img/thumbs/gp.png" alt="google"> </a> -->
                </div>
                <form id="login" action="./index.php" method="POST" class="input-group">
                    <input type="text" class="input-field" name="username-login" placeholder="User Name" required>
                    <input type="password" class="input-field" name="password-login" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box" name="remember"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Log in</button>

                </form>

                <form id="register" action="./index.php" method="POST" class="input-group">
                    <input type="text" name="username" id="username" class="input-field" placeholder="Username" required>
                    <div id="uname_response" name="uname_response"></div>

                    <input type="email" name="email" class="input-field" placeholder="Email address" required>
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" name="checked" class="check-box"><span>I agree to the terms & conditions</span>
                    <button type="submit" class="submit-btn">Register</button>

                </form>
                <script src="../controllers/ajax.js">

                </script>
                <?php
                // echo '<p> Fac ce vreau </p>';
                require_once 'User.class.php';
                $userVerif = new User();
                if ($userVerif->alreadyExist1() == 0) {
                    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['checked'])) {

                        $info['id'] = "'" . uniqid() . "'";
                        $info['username'] = "'" . $_POST['username'] . "'";
                        $info['email'] = "'" . $_POST['email'] . "'";
                        $info['password'] = "'" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "'";
                        $info['avatar'] = "'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png'"; // url la default
                        // daca exista facem un echo 
                        // introdu alt nume
                        // $usr  = new User();
                        $userVerif->checkUser($info);
                    }
                } else {
                    echo '<p>Deja exista </p>';
                }
                ?>
                <?php
                if (isset($_POST['username-login']) && isset($_POST['password-login'])) {
                    $passwordDB = $userVerif->alreadyExist2();
                    if (strcmp($passwordDB, "nu exista") == 0) {
                        echo '<p>Utilizator inexistent </p>';
                    } else {
                        // echo "parola-DB ".$passwordDB;
                        $pass = password_hash($_POST['password-login'], PASSWORD_DEFAULT);
                        //echo " Hash ". $pass;
                        if (!(password_verify($_POST['password-login'], $passwordDB)))
                            echo '<p>Parola invalida </p>';
                        else {
                            // du-ma direct pe pagina de menu ---
                            session_start();
                            $_SESSION['poza'] = "'" . $userVerif->poza() . "'";

                            $_SESSION['nume'] = $_POST['username-login'];

                            $_SESSION['id'] = "'" . $userVerif->getId() . "'";

                            header('Location: http://127.0.0.1:3000/app/views/menu.php');
                            exit;
                        }
                    }
                }
                ?>
            </div>

        </div>
        <footer>


            <div>
                <a href="raport.html">Raportul proiectului</a>
            </div>
            <div> <a href="ghid.html">Ghidul Utilizatorului</a> </div>
            <div> <a href='https://www.freepik.com/vectors/tree'>Tree vector created by brgfx - www.freepik.com</a>
            </div>

        </footer>
    </div>

    <script src="../controllers/index.js"></script>


</body>

</html>