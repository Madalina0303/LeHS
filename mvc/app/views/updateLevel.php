<?php
 $level=htmlspecialchars($_GET["level"]);
 $challenge=htmlspecialchars($_GET["chlg"]);
 echo " o intrat pe UPDATE LEVEL , CIUDAT !!!!!";
 require_once 'User.class.php';
 session_start();
 $verifUser = new User();
 $hai=$verifUser->updateLevel($_SESSION['id'],$level,$challenge);
 
 $verifUser->updatePunctaj($_SESSION['id'],$level,$challenge);
 
?>