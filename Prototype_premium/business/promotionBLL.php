<?php

include ("access/promotionDAL.php");


class promotionBLL{

   private $PromotionManager = null ;
   public  function __construct()
   {
      $this->PromotionManager = new promotionDAL();
   
   }


   function GetAllData(){

      return $this->PromotionManager->GetPromotion();

   }
   function AddData($Promotion){

      return $this->PromotionManager->AddPromotion($Promotion);

   }

    function DeleteData($id){
       return $this->PromotionManager->deletePromotion($id);
    }

   function EditData($id){

      return $this->PromotionManager->Edit($id);

   }

   function updataData($id,$name){

      return $this->PromotionManager->updataPromotion($id,$name);

   }

}
