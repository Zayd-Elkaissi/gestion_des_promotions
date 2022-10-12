<?php

function getConnected(){


$connect = new mysqli ('localhost', 'root', '', 'gestion_promotion');

if(!$connect){
    die(mysqli_error($con)); 
    echo "T'es pas connecté 3awed !";  

}
return $connect;

}

