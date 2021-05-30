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
                $queryhtml = "INSERT INTO " . $this->htmlTbl . ' VALUES(' . 'DEFAULT' . ',' . $userData['id'] . ',' . "\"" . "bh" . "\"" . ',' . "1" . ')';
                $querycss = "INSERT INTO " . $this->cssTbl . ' VALUES(' . 'DEFAULT' . ',' . $userData['id'] . ',' . "\"" . "bc" . "\"" . ',' . "1" . ')';
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
        echo $prevQuery;
        $result = $this->db->query($prevQuery);
       
        if ($result->num_rows == 1) {
          
            $row = $result->fetch_assoc();
            $progress['level'] = $row['level'];
            $progress['challenge'] = $row['challenge'];
            return $progress;
        }

        return null;
    }
}
