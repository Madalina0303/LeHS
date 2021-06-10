<?php
header('Content-Type: application/json');
if(isset($_GET["level"]))
$level=$_GET["level"];
else
$level="bh";
if(isset($_GET["challenge"]))
$challenge=$_GET["chlg"];
else
$challenge=1;

$model=file_get_contents("../models/model.json");
$modelJson=json_decode($model);
//var_dump( $modelJson);

    
    
    $require= $modelJson->$level[($challenge-1)]->require;
    $answer= $modelJson->$level[($challenge-1)]->answer;
     //var_dump($require);
    echo json_encode(array("status"=>'ok', "require"=>$require,"answer"=>$answer));

?>