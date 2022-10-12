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
        $promo->setId($result['id']);
        $promo->setPromo($result['nomPromostion']);
        array_push($array,$promo);
        }
        
        return $array ;
    }

    public function deletePromo($id){
        $delete = "DELETE  FROM promotion where id = $id";
        mysqli_query(getConnected(), $delete);
    }

    public function Edit($id){
        $select = "SELECT * from promotion where id = $id";
        $Query = mysqli_query(getConnected(),$select);
         while($result = mysqli_fetch_assoc($Query)){

        $promo = new Promotion();
        $promo->setId($result['id']);
        $promo->setPromo($result['nomPromostion']);
        }
        
        return $promo ;
    }

    public function updataPromo($id,$name) {
        // Requête SQL
        $update = "UPDATE promotion SET 
        nomPromostion='$name'
        WHERE id=$id";
    
        mysqli_query(getConnected(),$update);
    
    }


    
    }