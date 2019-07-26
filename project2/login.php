<?php
// pokrecemo da bismo na vise strana mogli da imamo username koji se koristi :D 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/log.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/logmob.css" media="screen and (max-width: 799px)">
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
            <li><a class="aktiv" href="login.php">Log In</a></li>
            <li><a  href="registracija.php">Registracija</a></li>
            <li><a href="odjava.php">Odjava</a></li>

        </ul>
        <br>
        
        <h1 style="color: white;text-align: center; font-size:50px">Log In</h1>
        <div>
        <p id='greska' >
<?php
if(isset($_GET['login'])){
    
    include('funkcije.php');
    $veza=konektujse();
    $korisnicko=$_GET['korisnicko'];
    $sifra=$_GET['sifra'];
    $upit_k="SELECT username
FROM klijent
WHERE username='$korisnicko'";
$rezultat=mysqli_query($veza,$upit_k) or die("Nije prosao upit".mysqli_error($veza));
if(mysqli_num_rows($rezultat)==0){
    echo "Ne postoji taj korisnik!";
}else{
    $korisnik=mysqli_fetch_assoc($rezultat);

    $_SESSION['username']=$korisnik['username'];
    echo "uspeh!";
}
diskonektujse($veza);

}



?>


</p>
<form id='log' method="GET" action="">
    <div>
        <label>Korisnicko:</label>
        <br>
        <input id='korisnicko' type="text" name="korisnicko">
        <br>

    </div>
    <div>
            <label>Sifra:</label>
            <br>
            <input id='sifra' type="text" name="sifra">
            <br>
    
        </div>
        <div>
            <br>
                <input id="login" name='login' type="submit" value="Log In">
            </div>

</form>


        </div>
            
                
            </body>
            </html>