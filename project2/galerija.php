 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/galerija.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/galerijamob.css" media="screen and (max-width: 799px)">
  <title>Galerija</title>
<style>
    #omotac{
        margin: 0 auto;
        
    }
    body{
        background-color: black;
    }
</style>
 <script  src="jquery-3.2.1.js"></script>
 <script type='text/javascript' >
 
 
 
 $(document).ready(function(){
                 
                 var slike=['slika2.jpg', 'slika3.jpg', 'slika4.jpg','slika5.jpg','slika6.jpg'
                             ,'slika7.jpg','slika8.jpg','slika9.jpg','slika10.jpg'];
                             
                 var putanja = './slike/';
                 var i = 0;
                 var id;
 id = window.setInterval( function(){
                         //console.log("Opet smo tu!");
                         
                         $("#slika").fadeOut(2000, function(){
                     
                             i= (i+1)%slike.length;
                     
                             $("#slika").attr('src',putanja+slike[i]);
                     
                             $("#slika").fadeIn(2000);
                         });
             
             
                     }, 2000);
 });
 
 </script>
</head>
<body>
<div id="omotac">
<ul>
    
    <li><a href='destinacije.php'>Destinacije</a></li>
    <li><a class="aktiv" href="galerija.php">Galerija</a></li>
    <li><a href="login.php">Log In</a></li>
    <li><a href="registracija.php">Registracija</a></li>
    <li><a href="odjava.php">Odjava</a></li>

</ul>
<br>

<h1 style="color: white;text-align: center">Galerija</h1>
<br>

<div id="galerija" >


<img  src="./slike/slika1.jpg" id="slika">




</div>



    
</body>
</html>