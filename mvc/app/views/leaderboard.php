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
 foreach($jmk as $key => $value){
    echo $key;
    echo "lalal";
    echo $value;
 
  }

  $jmk1=$verifUser->sortCss();
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
 foreach($jmk1 as $key => $value){
    echo $key;
    
    echo $value;
 
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
            <img src="../../public/img/pirate1.png" alt="penguin pirate">
            <nav>
                <a href="" class="active">Solo</a>
                <a href="">Duo</a>
                <a href="">Squad</a>
                <a href="">Solo FPP</a>
            </nav>
        </header>

        <table>
           <thead>
              <tr>
                <th class="rank"></th>
                <th class="nick">Nickname</th>
                <th class="sp">SP</th>
                <th class="kd">K/D</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="rank">1</td>
                    <td class="nick">Sc0utOP</td>
                    <td class="sp">6.308</td>
                    <td class="kd">4.8</td>
                </tr>    

                <tr>
                    <td class="rank">2</td>
                    <td class="nick">MortaL</td>
                    <td class="sp">6.301</td>
                    <td class="kd">4.5</td>
                </tr>    

                <tr>
                    <td class="rank">3</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.108</td>
                    <td class="kd">2.1</td>
                </tr>    

                <tr>
                    <td class="rank">4</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.3</td>
                    <td class="kd">5.1</td>
                </tr>    

                <tr>
                    <td class="rank">5</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.1</td>
                    <td class="kd">2.9</td>
                </tr>    

                <tr>
                    <td class="rank">6</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">6.1</td>
                    <td class="kd">5.7</td>
                </tr>  
                
                <tr>
                    <td class="rank">7</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">4.3</td>
                    <td class="kd">3.8</td>
                </tr>    
            </tbody>
        </table>

     </div>

        <div class="leaderboard">
            <header>
                <h1>CSS</h1>
                <img src="../../public/img/pirate2.png" alt="penguin pirate">
                <nav>
                    <a href="" class="active">Solo</a>
                    <a href="">Duo</a>
                    <a href="">Squad</a>
                    <a href="">Solo FPP</a>
                </nav>
            </header>
    
            <table>
               <thead>
                  <tr>
                    <th class="rank"></th>
                    <th class="nick">Nickname</th>
                    <th class="sp">SP</th>
                    <th class="kd">K/D</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="rank">1</td>
                        <td class="nick">Sc0utOP</td>
                        <td class="sp">6.308</td>
                        <td class="kd">4.8</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">2</td>
                        <td class="nick">MortaL</td>
                        <td class="sp">6.301</td>
                        <td class="kd">4.5</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">3</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.108</td>
                        <td class="kd">2.1</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">4</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.3</td>
                        <td class="kd">5.1</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">5</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.1</td>
                        <td class="kd">2.9</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">6</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">6.1</td>
                        <td class="kd">5.7</td>
                    </tr>  
                    
                    <tr>
                        <td class="rank">7</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">4.3</td>
                        <td class="kd">3.8</td>
                    </tr>    
                </tbody>
            </table>
    
            </div>

            <div class="leaderboard">
                <header>
                    <h1>ALL</h1>
                    <img src="../../public/img/pirate3.png" alt="penguin pirate">
                    <nav>
                        <a href="" class="active">Solo</a>
                        <a href="">Duo</a>
                        <a href="">Squad</a>
                        <a href="">Solo FPP</a>
                    </nav>
                </header>
        
                <table>
                   <thead>
                      <tr>
                        <th class="rank"></th>
                        <th class="nick">Nickname</th>
                        <th class="sp">SP</th>
                        <th class="kd">K/D</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="rank">1</td>
                            <td class="nick">Sc0utOP</td>
                            <td class="sp">6.308</td>
                            <td class="kd">4.8</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">2</td>
                            <td class="nick">MortaL</td>
                            <td class="sp">6.301</td>
                            <td class="kd">4.5</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">3</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.108</td>
                            <td class="kd">2.1</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">4</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.3</td>
                            <td class="kd">5.1</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">5</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.1</td>
                            <td class="kd">2.9</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">6</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">6.1</td>
                            <td class="kd">5.7</td>
                        </tr>  
                        
                        <tr>
                            <td class="rank">7</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">4.3</td>
                            <td class="kd">3.8</td>
                        </tr>    
                    </tbody>
                </table>
        
                </div>
            </div>
    
</body>
<!-- 
<body class="board">

    <div class="head">
        <div class="game-title">
            <img src="../../public/img/thumbs/title1.png" alt="title">
        </div> 
    
        <h1> 𝕷𝖊𝖆𝖉𝖊𝖗𝕭𝖔𝖆𝖗𝖉 </h1> 
    
        <div class="exit-btn">
                <img src="../../public/img/exit2.png" alt="exit" onclick="javascript:window.location='http://127.0.0.1:5500/mvc/app/views/menu.html'">
        </div> 

        </div>

    

    <div class="leaderboard">
        <header>
            <h1>HTML</h1>
            <img src="../../public/img/pirate1.png" alt="penguin pirate">
            <nav>
                <a href="" class="active">Solo</a>
                <a href="">Duo</a>
                <a href="">Squad</a>
                <a href="">Solo FPP</a>
            </nav>
        </header>

        <table>
           <thead>
              <tr>
                <th class="rank"></th>
                <th class="nick">Nickname</th>
                <th class="sp">SP</th>
                <th class="kd">K/D</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="rank">1</td>
                    <td class="nick">Sc0utOP</td>
                    <td class="sp">6.308</td>
                    <td class="kd">4.8</td>
                </tr>    

                <tr>
                    <td class="rank">2</td>
                    <td class="nick">MortaL</td>
                    <td class="sp">6.301</td>
                    <td class="kd">4.5</td>
                </tr>    

                <tr>
                    <td class="rank">3</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.108</td>
                    <td class="kd">2.1</td>
                </tr>    

                <tr>
                    <td class="rank">4</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.3</td>
                    <td class="kd">5.1</td>
                </tr>    

                <tr>
                    <td class="rank">5</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">5.1</td>
                    <td class="kd">2.9</td>
                </tr>    

                <tr>
                    <td class="rank">6</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">6.1</td>
                    <td class="kd">5.7</td>
                </tr>  
                
                <tr>
                    <td class="rank">7</td>
                    <td class="nick">CarryMinati</td>
                    <td class="sp">4.3</td>
                    <td class="kd">3.8</td>
                </tr>    
            </tbody>
        </table>

     </div>

        <div class="leaderboard">
            <header>
                <h1>CSS</h1>
                <img src="../../public/img/pirate2.png" alt="penguin pirate">
                <nav>
                    <a href="" class="active">Solo</a>
                    <a href="">Duo</a>
                    <a href="">Squad</a>
                    <a href="">Solo FPP</a>
                </nav>
            </header>
    
            <table>
               <thead>
                  <tr>
                    <th class="rank"></th>
                    <th class="nick">Nickname</th>
                    <th class="sp">SP</th>
                    <th class="kd">K/D</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="rank">1</td>
                        <td class="nick">Sc0utOP</td>
                        <td class="sp">6.308</td>
                        <td class="kd">4.8</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">2</td>
                        <td class="nick">MortaL</td>
                        <td class="sp">6.301</td>
                        <td class="kd">4.5</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">3</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.108</td>
                        <td class="kd">2.1</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">4</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.3</td>
                        <td class="kd">5.1</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">5</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">5.1</td>
                        <td class="kd">2.9</td>
                    </tr>    
    
                    <tr>
                        <td class="rank">6</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">6.1</td>
                        <td class="kd">5.7</td>
                    </tr>  
                    
                    <tr>
                        <td class="rank">7</td>
                        <td class="nick">CarryMinati</td>
                        <td class="sp">4.3</td>
                        <td class="kd">3.8</td>
                    </tr>    
                </tbody>
            </table>
    
            </div>

            <div class="leaderboard">
                <header>
                    <h1>ALL</h1>
                    <img src="../../public/img/pirate3.png" alt="penguin pirate">
                    <nav>
                        <a href="" class="active">Solo</a>
                        <a href="">Duo</a>
                        <a href="">Squad</a>
                        <a href="">Solo FPP</a>
                    </nav>
                </header>
        
                <table>
                   <thead>
                      <tr>
                        <th class="rank"></th>
                        <th class="nick">Nickname</th>
                        <th class="sp">SP</th>
                        <th class="kd">K/D</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="rank">1</td>
                            <td class="nick">Sc0utOP</td>
                            <td class="sp">6.308</td>
                            <td class="kd">4.8</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">2</td>
                            <td class="nick">MortaL</td>
                            <td class="sp">6.301</td>
                            <td class="kd">4.5</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">3</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.108</td>
                            <td class="kd">2.1</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">4</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.3</td>
                            <td class="kd">5.1</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">5</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">5.1</td>
                            <td class="kd">2.9</td>
                        </tr>    
        
                        <tr>
                            <td class="rank">6</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">6.1</td>
                            <td class="kd">5.7</td>
                        </tr>  
                        
                        <tr>
                            <td class="rank">7</td>
                            <td class="nick">CarryMinati</td>
                            <td class="sp">4.3</td>
                            <td class="kd">3.8</td>
                        </tr>    
                    </tbody>
                </table>
        
                </div>
    
</body> -->

</html>