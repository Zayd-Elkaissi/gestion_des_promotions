<?php
class Promotion {

    private $id;
    private $promotion;


    public function getId(){
        return $this->id;
    }
    public function setId($value){
        $this->id = $value;
    }

    public function getPromotion(){
        return $this->promotion;
    }

    public function setPromotion($value){
        $this->promotion = $value;
    }
}

?>