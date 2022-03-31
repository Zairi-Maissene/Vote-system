<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_COOKIE["has-voted"])){
           ?> <h1> Vous avez deja voté "<?php echo $_COOKIE["has-voted"] ?> "</h1>
       <?php } else { ?>
    <form action="data.php" method ="post">
      
        <label for="vote">
            Que pensez vous du contenu PHP?
           <label>Mauvais<input type="radio" name="vote" id="1" value="Mauvais"></label>
           <label>Moyen <input type="radio" name="vote" id="2" value="Moyen"></label>
            <label>Bon<input type="radio" name="vote" id="3" value="Bon"></label>
        </label>
        <input type="submit" value="valider vote">
    </form> <?php } ?>
    
</body>
</html>