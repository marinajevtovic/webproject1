<?php
//deo za funkcije pomocu kojih se konektujemo na bazu 
function konektujse(){
global $veza;
$veza=mysqli_connect('localhost','root','','proba');
if($veza == false){
    die("<span class='greska'>Nije uspelo konektovanje na bazu</span>");
}
return $veza;

}
function diskonektujse($veza){
    
    mysqli_close($veza);
}

?>