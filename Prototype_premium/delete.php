<?php

include "business/promotionBLL.php";

$PromoBLL = new promotionBLL();

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->deleteData($id);
    header("Location:index.php");
}



?>