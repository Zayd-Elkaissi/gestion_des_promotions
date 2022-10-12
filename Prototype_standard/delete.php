<?php

include "business/promoBLL.php";

$PromoBLL = new PromoBLL();

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->deleteData($id);
    header("Location:index.php");
}



?>