<?php

class User
{
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "oauth2_login"; // de pus o baza de date normala a noastra 
    private $userTbl    = 'users';
    private $htmlTbl    = 'user_progresshtml';
    private $cssTbl     = 'user_progresscss';
    function __construct()
    {
        if (!isset($this->db)) {
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if ($conn->connect_error) {
                die("Failed to connect with MySQL: " . $conn->connect_error);
            } else {
                $this->db = $conn;
            }
        }
    }
    function checkUser($userData = array())
    {
        if (!empty($userData)) {
            // Check whether user data already exists in database
            $prevQuery = "SELECT * FROM " . $this->userTbl . " WHERE id = " . $userData['id'];
            echo '<br/>';
            echo $prevQuery;
            echo '<br/>';
            $prevResult = $this->db->query($prevQuery);
            var_dump($prevResult);
            echo '<br/>';
            $nrRow = $prevResult->num_rows;
            if ($nrRow > 0) { // exista deja 
                echo 'Exista deja in bd';
            } else {
                // nu exista utilizatorul punem in bd si l punem si in tabela cu progress cu nivelul beginner si provocarea 0
                echo 'Intra aicea dar nu face insert Rusinica ';
                $query = "INSERT INTO " . $this->userTbl . ' VALUES(' . $userData['id'] . ',' . $userData['username'] . ',' . $userData['avatar'] . ',' . $userData['email'] . ',' . $userData['password'] . ')';
                $queryhtml = "INSERT INTO " . $this->htmlTbl . ' VALUES(' . 'DEFAULT' . ',' . $userData['id'] . ',' . "\"" . "bh" . "\"" . ',' . "1" . ',' . "0" . ')';
                $querycss = "INSERT INTO " . $this->cssTbl . ' VALUES(' . 'DEFAULT' . ',' . $userData['id'] . ',' . "\"" . "bc" . "\"" . ',' . "1" . ',' . "0" . ')';
                echo '<br/>';
                echo $query;
                $insert = $this->db->query($query);
                $inserthtml = $this->db->query($queryhtml);
                $insertcss = $this->db->query($querycss);
            }
        }
    }
    function alreadyExist()
    {
        if (isset($_POST['username'])) {
            $username = mysqli_real_escape_string($this->db, $_POST['username']);

            $query = "select count(*) as cntUser from users where username='" . $username . "'";

            $result = mysqli_query($this->db, $query);
            $response = "<span style='color: green;'>Is available.</span>";
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_array($result);

                $count = $row['cntUser'];

                if ($count > 0) {
                    $response = "<span style='color: red;'>Not Available.</span>";
                }
            }

            echo $response;
            die;
        }
    }
    function alreadyExist1()
    {
        if (isset($_POST['username'])) {
            $username = mysqli_real_escape_string($this->db, $_POST['username']);

            $query = "select count(*) as cntUser from users where username='" . $username . "'";

            $result = mysqli_query($this->db, $query);
            $response = "<span style='color: green;'>Is available.</span>";
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_array($result);

                $count = $row['cntUser'];

                if ($count > 0) {
                    return 1; // exista deja 
                }
            }
            return 0; // nu exista
        }
    }
    function alreadyExist2()
    {
        if (isset($_POST['username-login'])) {
            $username = mysqli_real_escape_string($this->db, $_POST['username-login']);

            $query = "select count(*) as cntUser from users where username='" . $username . "'";

            $result = mysqli_query($this->db, $query);
            $response = "<span style='color: green;'>Is available.</span>";
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_array($result);

                $count = $row['cntUser'];

                if ($count == 1) {
                    $query = "select password as parola from users where username='" . $username . "'";
                    $result = $this->db->query($query);

                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        return $row['parola'];
                    }
                }
            }
            return "nu exista"; // nu exista
        }
    }
    function poza()
    {
        if (isset($_POST['username-login'])) {
            $username = mysqli_real_escape_string($this->db, $_POST['username-login']);
            $query = "select avatar  from users where username='" . $username . "'";
            $result = $this->db->query($query);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                return $row['avatar'];
            }
        }
        return "no photo";
    }

    function getId()
    {
        if (isset($_POST['username-login'])) {
            $username = mysqli_real_escape_string($this->db, $_POST['username-login']);
            $query = "select id  from users where username='" . $username . "'";
            $result = $this->db->query($query);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                return $row['id'];
            }
        }
        return "no id";
    }

    function getHtmlLevel($id = '')
    {
        $progress = array();
        $prevQuery = "SELECT level,challenge FROM " . $this->htmlTbl . " WHERE idUser = " . $id;
        // echo $prevQuery;
        $result = $this->db->query($prevQuery);

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $progress['level'] = $row['level'];
            $progress['challenge'] = $row['challenge'];
            return $progress;
        }

        return null;
    }
    function getCssLevel($id = '')
    {
        $progress = array();
        $prevQuery = "SELECT level,challenge FROM " . $this->cssTbl . " WHERE idUser = " . $id;
        //echo $prevQuery;
        $result = $this->db->query($prevQuery);

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $progress['level'] = $row['level'];
            $progress['challenge'] = $row['challenge'];
            return $progress;
        }

        return null;
    }
    function getHtmlPunctaj($id = '')
    {
      
        $prevQuery = "SELECT punctaj FROM " . $this->htmlTbl . " WHERE idUser = " . $id;
        //echo $prevQuery;
        $result = $this->db->query($prevQuery);

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $punctaj=$row['punctaj'];
            return $punctaj;
        }

        return null;
    }
    function getCssPunctaj($id = '')
    {
        
        $prevQuery = "SELECT punctaj FROM " . $this->cssTbl . " WHERE idUser = " . $id;
        //echo $prevQuery;
        $result = $this->db->query($prevQuery);

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $punctaj=$row['punctaj'];
            return $punctaj;
        }

        return null;
    }
    function updateLevel($id = '', $level = '', $challenge = '')
    {
        
        if ($level[1] == 'h') {
            
            $prevQuery = "Update " . $this->htmlTbl . " SET level=\"" . $level . "\",challenge=\"" . $challenge . "\" WHERE idUser = " . $id;
            echo $prevQuery;
            $result = $this->db->query($prevQuery);

            if ($result->num_rows == 1) {
                return true;
            }
        } else if ($level[1] == 'c') {
            $prevQuery = "Update " . $this->cssTbl . " SET level=\"" . $level . "\",challenge=\"" . $challenge . "\" WHERE idUser = " . $id;
            echo $prevQuery;
            $result = $this->db->query($prevQuery);

            if ($result->num_rows == 1) {
                return true;
            }
        }
        return false;
    }
    function sortHtml(){
       echo " intra pe sort HTMLL";
        $map=array();
        $prevQuery = "SELECT username,punctaj FROM " . $this->htmlTbl . " JOIN  ".$this->userTbl." ON ".$this->htmlTbl.".idUser=".$this->userTbl.".id". " ORDER BY punctaj DESC";
        // echo $prevQuery;
        $result = $this->db->query($prevQuery);
        
        if ($result->num_rows > 0) {

           while($row = $result->fetch_assoc()){
            //echo "uite cat reuseste el sa ia";
           // var_dump( $row);
            // $topNume[$index] = $row['username'];
            // $topPunctaj[$index]= $row['punctaj'];
            // $index=$index+1;
            $map[$row['username']]=$row['punctaj'];
           //echo $topNume;
          // echo" hai te rog eu frumos ";
           //echo $topPunctaj;
        }
        return $map;
        }
        return null;
    }
    function sortCss(){
        echo " intra pe sort HTMLL";
         $map=array();
         $prevQuery = "SELECT username,punctaj FROM " . $this->cssTbl . " JOIN  ".$this->userTbl." ON ".$this->cssTbl.".idUser=".$this->userTbl.".id". " ORDER BY punctaj DESC";
         // echo $prevQuery;
         $result = $this->db->query($prevQuery);
         
         if ($result->num_rows > 0) {
 
            while($row = $result->fetch_assoc()){
             //echo "uite cat reuseste el sa ia";
            // var_dump( $row);
             // $topNume[$index] = $row['username'];
             // $topPunctaj[$index]= $row['punctaj'];
             // $index=$index+1;
             $map[$row['username']]=$row['punctaj'];
            //echo $topNume;
           // echo" hai te rog eu frumos ";
            //echo $topPunctaj;
         }
         return $map;
         }
         return null;
     }
    function updatePunctaj($id = '', $level = '', $challenge = '')
    {
        if ($level[1] == 'h') {
            $punctaj = 0;
            switch ($level) {

                case "bh":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 0;
                            break;
                        case 2:
                            $punctaj = 33;
                            break;
                        case 3:
                            $punctaj = 66;
                            break;
                    }
                    break;
                case "ih":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 100;
                            break;
                        case 2:
                            $punctaj = 133;
                            break;
                        case 3:
                            $punctaj = 166;
                            break;
                    }
                    break;
                case "ah":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 200;
                            break;
                        case 2:
                            $punctaj = 233;
                            break;
                        case 3:
                            $punctaj = 266;
                            break;
                        case 4:
                            $punctaj = 300;
                            break;
                    }
                    break;
            }

            // update la punctaj HTML
            $prevQuery = "Update " . $this->htmlTbl . " SET punctaj=\"" . $punctaj . "\" WHERE idUser = " . $id;
            echo $prevQuery;
            $result = $this->db->query($prevQuery);

            if ($result->num_rows == 1) {
                return true;
            }
        } else if ($level[1] == 'c') {
            $punctaj = 0;
            switch ($level) {

                case "bc":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 0;
                            break;
                        case 2:
                            $punctaj = 33;
                            break;
                        case 3:
                            $punctaj = 66;
                            break;
                    }
                    break;
                case "ic":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 100;
                            break;
                        case 2:
                            $punctaj = 133;
                            break;
                        case 3:
                            $punctaj = 166;
                            break;
                    }
                    break;
                case "ac":
                    switch ($challenge) {
                        case 1:
                            $punctaj = 200;
                            break;
                        case 2:
                            $punctaj = 233;
                            break;
                        case 3:
                            $punctaj = 266;
                            break;
                        case 4:
                            $punctaj = 300;
                            break;
                    }
                    break;
            }
            $prevQuery = "Update " . $this->htmlTbl . " SET punctaj=\"" . $punctaj . "\" WHERE idUser = " . $id;
            echo $prevQuery;
            $result = $this->db->query($prevQuery);

            if ($result->num_rows == 1) {
                return true;
            }
        }
        return false;
    }
}
