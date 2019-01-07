
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="thweb.css">
    <title>Scrisoare pentru Moș Crăciun</title>
</head>
<body>
<section class="sky">      
    <header class="header">
        <h1>Vine Crăciunul</h1>
    <script src="./thweb.js"></script>
    </header>
</section>
 

<div id="topnav" class="topnav">
    <a href="scrisoare.php" > Scrisoare pentru Moș Crăciun </a>
    <a href="index.html"> Home </a>
    <a href="numaratoareInversa.html"> Numărătoare inversă </a>
    <a href="povesti.html" >Povești și legende</a>
</div>

 <?php 
    $numee = "";
    $scrisoare="";
     if(isset($_POST["letter"]) && isset($_POST["name"]) && !empty($_POST["letter"]) && !empty($_POST["name"]))
     {
        $numee = $_POST["name"];
        $scrisoare = $_POST["letter"];
     }
    
 ?> 
<form id="scrisoare" action="scrisoare.php" class="scrisoare" method="POST">
    <p id="modifica">Text care va fi modificat</p>
    <p id="sterge">Text care va fi sters</p>
    <input id="text" name="name" type="text" value="<?=$numee?>">
    <p>Ce dorești să-i scrii Moșului?</p>
    <textarea id="text2" name="letter" rows="10"><?=$scrisoare?></textarea><br>
    <input type="submit" id="btn" class="btn" value="Trimite">
</form>
<div class="scrisoare" >
    <p id="chestie" class="demo" style="display:block" >
    <?php
    if(isset($_POST["letter"]) && isset($_POST["name"]) && !empty($_POST["letter"]) && !empty($_POST["name"]))
    {
        echo $numee;
        echo $scrisoare;
        unset($_POST["name"]);
        unset($_POST["letter"]);
    }
    ?>
    </p>
</div>

<script src="./scrisoare.js"></script>
 
</body>
</html>