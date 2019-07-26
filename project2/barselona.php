 
 <?php
	
	session_start();
    if(!isset($_SESSION['username'])){
        header('Location: destinacije.php');
    
    }
?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Barselona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/barselona.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/barselonamob.css" media="screen and (max-width: 799px)">
<style>
    #omotac{
        margin: 0 auto;
        
    }
    body{
        background-color: black;
    }
    p{
        color:purple;
    }
</style>
<script src="jquery-3.2.1.js"></script>
</head>
<body>
        <div id="omotac">
                <ul>
                    
                    <li><a href='destinacije.php'>Destinacije</a></li>
                    <li><a  href="galerija.php">Galerija</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Barselona</h1>
			
		</div>
	</header>
                <section id="attractions">
                        <div class="omotac1">
                        <h2>Opis</h2>
                        
                                    <div class="omotac2">
                                       <?php
                                       include("funkcije.php");
                                       $veza=konektujse();
                                       $upit="SELECT * FROM destinacija
                                       WHERE ime='Barselona'";
                                       $rez=mysqli_query($veza,$upit);
                                       if($rez==false){
                                           die("upit greska".mysqli_error($veza));
                                       }
                                       $red=mysqli_fetch_assoc($rez);
                                       $opis=$red['opis'];
                                       $br_posetilaca=$red['br_posetilaca'];
                                       echo "<div>$opis<br>Broj posetilaca: $br_posetilaca
                                        </div>";
                                        diskonektujse($veza);
                                        ?>
                                    </div>
                                </div>
                                </section>
</body>
</html>