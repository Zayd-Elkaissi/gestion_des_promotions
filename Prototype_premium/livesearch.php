<?php
include "access/config.php";
if(isset ($_post['input'])){
    $input = $_POST[`input`];
    $query = "SELECT * FROM promotion WHERE nomPromostion LIKE '{$input}%'";
   $result = mysqli_query($con, $query);
   if(mysqli_num_rows($result) > 0){
    ?>
        <table class="table table-bordered table-striped">
       </table>

       <?php
   }else{
    echo "<h6 class-'text-danger text-center mt-3'>No data Found</h6>";

   }
}
       ?>

<?php

while($row = mysqli_fetch_assoc(result)){
    $id = $row[`id`];
    $nom = $row[`nomPromotion`];


     ?>
     <tr>
         <td><?php echo $id;?></td>
         <td><?php echo $name; ?></td>
         <td><?php echo $age;?></td>
         <td><?php echo $country;?></td>
         <td><?php echo $email;?></td>
         <td><?php echo $email;?></td>
     </tr>
     <?php
}
?>

