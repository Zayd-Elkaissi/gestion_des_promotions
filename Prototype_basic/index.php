<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des promotions</title>
</head>
<body>
    <div>
        <?php
           include "business/promotionBLL.php";
           $PromotionManager = new promotionBLL();
           $GetData =  $PromotionManager->GetAllData();


           $AddPromotion = new promotionBLL();
           if(!empty($_POST)){
            $promotion  = new Promotion();
            $promotion->setPromotion($_POST["promotion"]);
            $AddPromotion->AddData($promotion);
            header('Location:index.php');
           }
         
        ?>
        <form action="" method="post">
            <input type="text" id="promotion" name="promotion" class="form-control" placeholder="Enter Promotion">
            <button type="submit" name="submit" value="send" class="btn btn-info col-4 m-2">Send</button>
        </form>

        
        <?php 
        foreach($GetData as $value){
            
            
            ?>
            
    <h4> <?php echo $value->getPromotion() ?> </h4>
     
     
    </tr>
<?php }?>
    </div>
</body>
</html>