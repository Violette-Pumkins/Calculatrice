
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="layout/bs4/css/bootstrap.min.css">
    <title>Résultats</title>
</head>

<body>
    
<a href="index.php" class="btn btn-primary" >Retourner vers la calculatrice</a>
<?php foreach(Calculatrice::recupererliste() as $result){?> 
    <li><?php echo $result?> </li>
<?php   }?>

    

    

</body>
</html>