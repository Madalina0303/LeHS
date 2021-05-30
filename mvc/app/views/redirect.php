<?php
 $code =$_GET['code'];

 //b79632e39930bb1f3f9a

 //4bf8d77cf7aeba2bb86e
 if($code == ""){
    // header('Location: http://127.0.0.1:3000/app/views');
     exit; 
 }
 $CLIENT_ID="828bd86cb437a36d7c6a";
 $CLIENT_SECRET="278ae695737e71e928de5664f7dd192a55f720aa";
 $URL="https://github.com/login/oauth/access_token";
 $postParams=[
     'client_id' => $CLIENT_ID,
     'client_secret' => $CLIENT_SECRET,
     'code' => $code
 ];
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$URL);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_POSTFIELDS, $postParams);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept:application/json'));
 $response = curl_exec($ch);
 curl_close($ch);

 $data = json_decode($response);

 if($data->access_token != ""){
    session_start();
    $var =$data->access_token;
   // $_SESSION['my_access_token_accessToken'] = $var; 
    echo $var; 
    echo 'Intra aicea';
  
   $URL = "https://api.github.com/user";
  $authHeader = "Authorization: token " . $var;
  $userAgentHeader = "User-Agent: Demo";
 // echo $authHeader . '<br/>';
  $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$URL);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept:application/json',$authHeader,
   $userAgentHeader
  ));
 $response1 = curl_exec($ch);
 var_dump($response1);
 echo '<br/>';
 $info = explode("," , $response1);
//  var_dump($info);
$user = explode(":" ,$info[0]);
echo $user[1];
$id = explode(":",$info[1]);
echo '<br/>';
echo $id[1];
$url = explode(":",$info[3]);
$urlAvatar=$url[1] . ':' .$url[2];
echo '<br/>';
echo $urlAvatar;
$email = explode(":",$info[22]);
echo '<br/>';
echo $email[1];
 curl_close($ch);
$gitUser = array();
$user[1][0]='\'';
$user[1][strlen($user[1])-1]='\'';
if($email[1]!='null'){
$email[1][0]='\'';
$email[1][strlen($email[1])-1]='\'';
}
$urlAvatar[0]='\'';
$urlAvatar[strlen($urlAvatar)-1]='\'';
echo '<br/>';
echo $user[1];
echo '<br/>';
echo $urlAvatar;
echo '<br/>';
echo $email[1];
$gitUser['id'] = strval($id[1]);
$gitUser['username'] = $user[1];
$gitUser[ 'avatar'] = $urlAvatar; 
$gitUser['email'] = $email[1];
// $n = null;
$gitUser['password'] = "null";
require_once 'User.class.php';
$userVerif =new User();
$userVerif->checkUser($gitUser);
 $data = json_decode($response);
 //echo json_encode($data);
 $gitUser['avatar'][0]='"';
 $gitUser['avatar'][strlen($urlAvatar)-1]='"';
 $_SESSION['poza'] = $gitUser['avatar'];
 $nume=substr($gitUser['username'],1,strlen($gitUser['username'])-2);
 echo $nume;
 $_SESSION['nume']=$nume;
 $_SESSION['id']=$gitUser['id'];
 header('Location: http://127.0.0.1:3000/app/views/menu.php');
  // exit;

}
//var_dump($data);
 echo 'Error';
?>
