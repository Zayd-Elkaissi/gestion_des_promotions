<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="promo" name="search" class="form-control" autocomplete= "off" placeholder="Enter un Promotion">
   <div id="searchresult"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type= "text/javascript">
    $(document).ready(function(){
        $("#promo").keyup(function(){
             var input = $(this).val();
            //  alert(input);
            if(input != ""){
     $.ajax({
         url: "livesearch.php",
         method: "POST",
         data: {input:input},

         success:function(data){
             $("#searchresult").html(data):
         }
        });
    }else{
        $("#searchresult").css("display","none");

    }

        });
    });
</script>
</body>
</html>