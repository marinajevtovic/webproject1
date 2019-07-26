 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Registracija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/registracija.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/registracijamob.css" media="screen and (max-width: 799px)">
<style>
    #omotac{
        margin: 0 auto;
        
    }
    body{
        background-color: black;
    }
    p{
        color:aqua;
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
            <li><a class="aktiv" href="registracija.php">Registracija</a></li>
            <li><a href="odjava.php">Odjava</a></li>
        </ul>
        <br>
        
        <h1 style="color: white;text-align: center; font-size:50px">Registruj se</h1>
        <div>
<p id='porukazagresku'>
<?php
if (isset($_GET['registruj'])){

include('funkcije.php');
//povezujemo se na bazu
$veza=konektujse();

$korisnicko=$_GET['korisnicko'];
$mejl=$_GET['mejl'];
$sifra=$_GET['sifra'];
if(strlen($sifra)<5){
    die("Sifra nije odgovarajuca! Mora najmanje 6 karaktera!");
}
if(strlen($mejl<0) || strpos($mejl,'@')==false || strrpos($mejl,'.')<strpos($mejl,'@') )
{
    die
    ("Mejl adresa nije ispravna!");
}
//u promenljive smo upisali podatke preostaje jos da proverimoo
//ima li korisnika sa tim korisnickim imenom jer mora ! da bude
//a potom da upisemo u bazu
$upit_k="SELECT username
FROM klijent
WHERE username='$korisnicko'";
$rezultat=mysqli_query($veza,$upit_k) or die("Nije prosao upit".mysqli_error($veza));

//$n=mysqli_num_rows($rezultat);

//if($n==1){
//    echo "Korisnicko ime zauzeto,probajte drugo!";
//}
if(mysqli_num_rows($rezultat)==0){
    //upisujemo u bazu ako nema tog korisnickog imena
    $upit= "INSERT INTO klijent (username,email,sifra)
    VALUES('$korisnicko', '$mejl', '$sifra');
    ";
    $rezultat1=mysqli_query($veza,$upit) or die("Nije dobar upit".mysqli_error($veza));
if($rezultat1==true){
    echo "Uspesno ste registrovani!";

}
else{
    echo "problem sa bazom!";
}

}
else{
    echo "Postoji vec!";
}
diskonektujse($veza);
}


?>


</p>
<form id="registracija" method="GET" action="">
    <div>
        <label>Korisnicko ime:</label>
        <br>
        <input id='korisnicko' type="text" name="korisnicko">
    </div>

    <div>
            <label>Mejl adresa:</label>
            <br>
            <input id='mejl' type="text" name="mejl">
        </div>
        <div>
                <label>Sifra:</label>
                <br>
                <input id='sifra' type="text" name="sifra">
                <br>
            </div>
            <div>
                <br>
                    <input id="registruj" name='registruj' type="submit" value="Registruj se">
                </div>


</form>

</div>
<script>
$(document).ready(function(){


$("#registruj").click(function(){

var email=$('#mejl').val();
var sifra=$('#sifra').val();
var korisnicko=$('#korisnicko').val();
var pozicija1=email.indexOf("@");
var pozicija2=email.lastIndexOf(".");
//imamo situaciju da nema @ to je greska mejla, da je zadnja tacka ispred @ isto greska, i da nije uneta adresa
//korisnicko ime treba da bude izmedju 5 i 10 duzine
//sifra treba da je duzine vece od 5
if(email.length == 0 ){
    window.alert("MORATE UNETI VASU EMAIL ADRESU!");
return;
}
if(pozicija1==-1 || pozicija1>pozicija2){
    window.alert("Nepravilna adresa!");
return;
}
if(korisnicko.length <5 || korisnicko.length>10){
    window.alert("Korisnicko ime treba da bude duzine izmedju 5 i 10");

return;
}
if(sifra.length < 5){
    window.alert("Sifra mora biti veca od 5");
    return;
}
//ako je negde greska vraca se, a ako ne ispisace da je korisnik uspesno registrovan
//alert("Uspesno ste registrovani!");


});

})
//Sada ostaje upis korisnika u bazu


</script>
</div>
        </body>
        </html>