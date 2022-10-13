<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Gestion des promotions</title>


  <div>
    <?php
           include "business/promotionBLL.php";
           $PromoManager = new promotionBLL();
           $GetData =  $PromoManager->GetAllData();


           $AddPromo = new promotionBLL();
           if(!empty($_POST)){
            $promo  = new Promotion();
            $promo->setPromo($_POST["promo"]);
            $AddPromo->AddData($promo);
            header('Location:index.php');
           }
         
        ?>

    <form action="" method="POST">
      <input type="text" id="search" name="input" class="control-form">
    </form>

    <div class="container">
      <div class="table-wrapper">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody id="showS">
            <tr>
              <?php 
        foreach($GetData as $value){
          
       
        ?>
              <td>
                <?php echo $value->getId() ?>
              </td>
              <td>
                <?php echo $value->getPromo() ?>
              </td>
              <td>
                <a href="Edit.php?id=<?php echo $value->getId() ?>">Edit</a>
                <a href="Delete.php?id=<?php echo $value->getId() ?>">Delete</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#search').keyup(function () {
          var input = $(this).val();
          // alert(input);

          if (input != ' ') {
            $.ajax({
              url: "access/search.php",
              method: "POST",
              data: { key: input },
              success: function (data) {
                $('#showS').html(data);
              }
            });

          }

        });
      });
    </script>
    </body>

</html>