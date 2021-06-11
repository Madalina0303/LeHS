<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaderBoard</title>
    <link rel="icon" href="https://cdn.nohat.cc/thumb/f/350/5978768157966336.jpg" type="image/x-icon" sizes="18x18">
    <link rel="stylesheet" href="../../public/css/leaderboard.css">
</head>
<?php
 require_once 'User.class.php';
 session_start();
 $verifUser = new User();
 $jmk=$verifUser->sortHtml();
 $numeH=array();
 $puncteH=array();
 $ind=0;
 foreach($jmk as $key => $value){
   $numeH[$ind]=$key;
   $puncteH[$ind]=$value;
   $ind++;
  }
  $numeC=array();
  $puncteC=array();
  $ind=0;
  $jmk1=$verifUser->sortCss();

 foreach($jmk1 as $key => $value){
    $numeC[$ind]=$key;
    $puncteC[$ind]=$value;
    $ind++;
  }
?>
<body class="board">

    <div class="head">
        <div class="game-title">
            <img src="../../public/img/thumbs/title1.png" alt="title">
        </div> 
    
        <h1> 𝕷𝖊𝖆𝖉𝖊𝖗𝕭𝖔𝖆𝖗𝖉 </h1> 
    
        <div class="exit-btn">
                <img src="../../public/img/exit2.png" alt="exit" onclick="javascript:window.location='http://127.0.0.1:3000/mvc/app/views/menu.html'">
        </div> 

        </div>

    <div class="sectiunePanou">

    <div class="leaderboard">
        <header>
            <h1>HTML</h1>
            <img src="../../public/images/monkey.png" alt="penguin pirate">
            
        </header>

        <table>
           <thead>
              <tr>
                <th class="rank"></th>
                <th class="nick">Nickname</th>
                <th class="sp">Points</th>
               
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="rank">1</td>
                    <td class="nick"><?php echo $numeH[0] ?></td>
                    <td class="sp"><?php echo $puncteH[0]?></td>
                    
                </tr>    

                <tr>
                    <td class="rank">2</td>
                    <td class="nick"><?php echo $numeH[1] ?></td>
                    <td class="sp"><?php echo $puncteH[1]?></td>
                   
                </tr>    

                <tr>
                    <td class="rank">3</td>
                    <td class="nick"><?php echo $numeH[2] ?></td>
                    <td class="sp"><?php echo $puncteH[2]?></td>
                    
                </tr>    

                <tr>
                    <td class="rank">4</td>
                    <td class="nick"><?php echo $numeH[3] ?></td>
                    <td class="sp"><?php echo $puncteH[3]?></td>
                   
                </tr>      
                
            </tbody>
        </table>

     </div>

        <div class="leaderboard">
            <header>
                <h1>CSS</h1>
                <img src="../../public/images/lion.png" alt="penguin pirate">
                
            </header>
    
            <table>
               <thead>
                  <tr>
                    <th class="rank"></th>
                    <th class="nick">Nickname</th>
                    <th class="sp">Points</th>
                   
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="rank">1</td>
                        <td class="nick"><?php echo $numeC[0] ?></td>
                        <td class="sp"><?php echo $puncteC[0]?></td>
                        
                    </tr>    
    
                    <tr>
                        <td class="rank">2</td>
                        <td class="nick"><?php echo $numeC[1] ?></td>
                        <td class="sp"><?php echo $puncteC[1]?></td>
                        
                    </tr>    
    
                    <tr>
                        <td class="rank">3</td>
                        <td class="nick"><?php echo $numeC[2] ?></td>
                        <td class="sp"><?php echo $puncteC[2]?></td>
                      
                    </tr>    
    
                    <tr>
                        <td class="rank">4</td>
                        <td class="nick"><?php echo $numeC[3] ?></td>
                        <td class="sp"><?php echo $puncteC[3]?></td>
                       
                    </tr>    
    
                </tbody>
            </table>
    
            </div>

            <div class="leaderboard">
                <header>
                    <h1>ALL</h1>
                    <img src="../../public/images/tiger.png" alt="penguin pirate">
                    
                </header>
        
                <table>
                   <thead>
                      <tr>
                        <th class="rank"></th>
                        <th class="nick">Nickname</th>
                        <th class="sp">Points</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="rank">1</td>
                            <td class="nick">Sc0utOP</td>
                            <td class="sp">6.308</td>
                           
                        </tr>    
        
                        <tr>
                            <td class="rank">2</td>
                            <td class="nick">MortaL</td>
                            <td class="sp">6.301</td>
                           
                        </tr>    
        
                        <tr>
                            <td class="rank">3</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.108</td>
                           
                        </tr>    
        
                        <tr>
                            <td class="rank">4</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.3</td>
                           
                        </tr>    
        
                       
                    </tbody>
                </table>
        
                </div>
            </div>
    
</body>

</html>