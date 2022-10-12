<?php
include ("config.php");

include 'promotion.php';
class promoDA{


    
    public function AddPromo($add){

        $promo = $add->getPromo();
    $insert = "INSERT INTO promotion( `nomPromostion` ) VALUES ('$promo')";

    mysqli_query(getConnected(), $insert);
}

    public function GetPromo(){

        $array= [];
        $select = "SELECT * from promotion";
        $Query = mysqli_query(getConnected(),$select);
         while($result = mysqli_fetch_assoc($Query)){

        $promo = new Promotion();
        // $promo->setId($result['id']);
        $promo->setPromo($result['nomPromostion']);
        array_push($array,$promo);
        }
        
        return $array ;
    }
    }