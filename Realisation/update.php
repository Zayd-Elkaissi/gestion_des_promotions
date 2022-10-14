<?php
include "business/promotionBLL.php";
$promoBLL = new promotionBLL();
if(isset($_GET['id'])){
   $Data = $promoBLL->EditData($_GET['id']);
}
if(!empty($_POST)){
$id=$_POST['id'];
$name=$_POST['name'];
$promoBLL->updataData($id,$name);

header("Location:index.php");

}



?>

<form method="POST">

<input type="hidden" value=<?php echo $Data->getId()?>  name="id" >                                                             
Name: <input type="text" value=<?php echo $Data->getPromotion()?> name="name" >
<button >Update</button>
</form>