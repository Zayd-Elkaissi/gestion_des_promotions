<?php

include ("access/promotionDA.php");


class promotionBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new promoDA();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetPromo();

    }
    function AddData($Promo){

       return $this->PromoManager->AddPromo($Promo);

    }

    function DeleteData($id){
       return $this->PromoManager->deletePromo($id);
    }

}
