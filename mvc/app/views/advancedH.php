<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/advancedH.css">
    <title>HTML-Advanced</title>
</head>

<body>
    <header>
        <img src="../../public/images/rosu.png" class="pers" alt="personaj">

        <div class="hi">
           <p> We do this by the book.
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
    <div class="exercitiu">
      
      
        <div class="cod">
            
            <div class="continut">
            
            <p> &lt;p&gt; Un paragraf &lt;&#47;p&gt; </p>
            <textarea id="ln1" autofocus></textarea>
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
       
        <div class="cod">
            
            <div class="continut">
            
            <p> &lt;p&gt; Un exercitiu ceva &lt;&#47;p&gt; </p>
            <textarea id="ln2" ></textarea>
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
        
        <div class="cod">
            
            <div class="continut">
            
            <p> &lt;p&gt; Altceva &lt;&#47;p&gt; </p>
            <textarea id="ln3" ></textarea>
            </div>
            <button type="submit" class="Verify">Verify>></button>
        </div>
        
        <div class="cod">
            
            <div class="continut">
            
            <p> &lt;p&gt; Text text text &lt;&#47;p&gt; </p>
            <textarea id="ln4" ></textarea>
            </div>
            <button type="submit" class="Verify">Verify>></button>
            <button type="button" class="next" > Next</button>
        </div>
       
      
    </div>
    <script src="../controllers/lock.js"></script>
</body>

</html>
