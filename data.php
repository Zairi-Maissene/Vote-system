<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <?php
    if(isset($_COOKIE["has-voted"]))
    {header("location:index.php");}
   else {setcookie("has-voted",$_POST["vote"],time()+60*2,"/");
   ?> <h1> Votre vode a été validé! </h1> <?php } ?>
  
</body>
</html>