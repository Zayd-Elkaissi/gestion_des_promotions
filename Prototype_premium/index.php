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
           include "business/promoBLL.php";
           $PromoManager = new PromoBLL();
           $GetData =  $PromoManager->GetAllData();


           $AddPromo = new PromoBLL();
           if(!empty($_POST)){
            $promo  = new Promotion();
            $promo->setPromo($_POST["promo"]);
            $AddPromo->AddData($promo);
            header('Location:index.php');
           }
         
        ?>
        <form action="" method="post">
            <input type="text" id="promo" name="search" class="form-control" placeholder="Enter Promotion">
            <button type="submit" name="submit" value="send" class="btn btn-outline-info col-4 btn btn-center m-2">Send</button>
        </form>

        
        <?php 
        foreach($GetData as $value){
            
            
            ?>
            
    <h4> <?php echo $value->getPromo() ?> </h4>
    <a href="search.php">search</a>
     
     
    </tr>
<?php }?>
    </div>
</body>
</html>