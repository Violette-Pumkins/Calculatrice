<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="layout/bs4/css/bootstrap.min.css">
        <title>Calculatrice</title>
    </head>
    <body>
        <input type="hidden" name="action" value="accueil">
        <h2>Calculatrice</h2>
    <?php if(isset($_SESSION['success']) && $_SESSION['success']=== true) {?>
        <p>La sauvegarde à été réussie!</p>
    <?php } ?>
        <form action="index.php?action=calculer" method="POST">
            <div class="form-group">
                <input type="number" class="form-control" name="chiffre1">
            </div>

            <div class="form-group">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="operation" value="addition" id="add" autocomplete="off" checked> +
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="operation" value="soustraction" id="sous" autocomplete="off"> -
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="operation" value="multiplication" id="multi" autocomplete="off"> x
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="operation" value="division" id="divi" autocomplete="off"> /
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <input type="number" class="form-control" name="chiffre2">
                
                <button type="submit" class="btn btn-outline-dark" name= "submit">=</button>
            </div> 
        </form>
        
        <?php if(isset($_SESSION['resultat'])) {?> 
            <p>Le résultat est <?php echo $_SESSION['resultat'];?> </p>
            <form action= "index.php?action=sauvegarder" method= "POST">
                <input type="hidden" name="resultat" value= "<?php echo $_SESSION['resultat']?>">
                
                <button type="submit" class="btn btn-outline-success " >Sauvegarder</button>
            </form>      
        <?php } ?> 
        <a href="index.php?action=viewres" class="btn btn-outline-info mt-4" >Afficher l'historique des résultats</a>
    </body>
    <script src="Layout/bs4/js/jquery-3.5.1.slim.min.js"></script>
    <script src="Layout/bs4/js/bootstrap.bundle.min.js"></script>
</html>