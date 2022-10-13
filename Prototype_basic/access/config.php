<?php

function getConnected(){


$connect = new mysqli ('localhost', 'root', '', 'gestion_promotion');

if(!$connect){
    die(mysqli_error($connect));  

}
return $connect;

}

