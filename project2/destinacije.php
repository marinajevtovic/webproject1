<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Destinacije</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/destinacije.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/destinacijemob.css" media="screen and (max-width: 799px)">
<style>
    #omotac{
        margin: 0 auto;
        
    }
    body{
        background-color: black;
    }
    
</style>
<script src="jquery-3.2.1.js"></script>

</head>
<body>
    <div id="omotac">
        <ul>
            
            <li><a class="aktiv" href='destinacije.php'>Destinacije</a></li>
            <li><a  href="galerija.php">Galerija</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="registracija.php">Registracija</a></li>
            <li><a href="odjava.php">Odjava</a></li>
        </ul>
        <br>
        
        

        <section id="attractions">
<div class="omotac1">
<h2>Destinacije</h2>

			<div class="omotac2">
				<div class="dest">
					<img src="barselona.jpg" >
                    <h3>Barselona</h3>
                    
                    <?php
                    if(isset($_SESSION['username']))
                   { 
                    echo "<a href='barselona.php' class='det'>Detaljnije</a>";
                   
                }else{
                        echo "Ukoliko se prijavite bicete u mogucnosti da vidite vise o ovoj destinaciji";
                    }
                    
                    ?>
                    
				
				</div>

				<div class="dest">
					<img src="valensija.jpg" >
					<h3>Valensija</h3>
					<?php
                    if(isset($_SESSION['username']))
                   { 
                    echo "<a  href='valensija.php' class='det'>Detaljnije</a>";
                   
                }else{
                        echo "Ukoliko se prijavite bicete u mogucnosti da vidite vise o ovoj destinaciji";
                    }
                    
                    ?>
				</div>

				<div class="dest">
					<img src="firenca.jpg" >
                    <h3>Firenca</h3>
                    <?php
                    if(isset($_SESSION['username']))
                   {
                    echo "<a href='firenca.php' class='det'>Detaljnije</a>";
                   
                }else{
                        echo "Ukoliko se prijavite bicete u mogucnosti da vidite vise o ovoj destinaciji";
                    }
                    
                    ?>
					
				</div>
			</div>
        </div>
        </section>
    </div>
</body>
</html>