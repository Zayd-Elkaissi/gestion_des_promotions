<?php

include ("access/promotionDA.php");


class PromoBLL{

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

}
