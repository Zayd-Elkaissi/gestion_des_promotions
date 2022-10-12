<?php
include "business/PromoBLL.php";
$promoBLL = new PromoBLL();
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
Name: <input type="text" value=<?php echo $Data->getPromo()?> name="name" >
<button >Update</button>
</form>