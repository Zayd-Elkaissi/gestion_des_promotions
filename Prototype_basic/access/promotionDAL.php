<?php
include ("config.php");

include 'promotion.php';
class promotionDAL{


    
    public function AddPromotion($add){

        $promotion = $add->getPromotion();
    $insert = "INSERT INTO promotion( `nomPromostion` ) VALUES ('$promotion')";

    mysqli_query(getConnected(), $insert);
}

    public function GetPromotion(){

        $array= [];
        $select = "SELECT * from promotion";
        $Query = mysqli_query(getConnected(),$select);
         while($result = mysqli_fetch_assoc($Query)){

        $promotion = new Promotion();
        // $promotion->setId($result['id']);
        $promotion->setPromotion($result['nomPromostion']);
        array_push($array,$promotion);
        }
        
        return $array ;
    }

    }