<?php

include ("access/promotionDA.php");


class promotionBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new promoDA();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetPromotion();

    }
    function AddData($Promotion){

       return $this->PromoManager->AddPromotion($Promotion);

    }

}
