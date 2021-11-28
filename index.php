<?php
    //appel fichier externes
    function autoloadClassModel($class)
    {
        require_once 'Model/' . $class . '.class.php';
    }
    spl_autoload_register('autoloadClassModel');

    //initialisation variable
    session_start();
    $action = 'accueil';
    // var_dump($_GET);
    //gestion action
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    //effets des actions (traitements)
        switch ($action) {
            case 'accueil':
                    require('view/viewcalc.php');
                break;

            case 'calculer':
                    if ($_GET['action'] = 'calculer') {
                        $chiffre1= $_POST['chiffre1'];
                        $chiffre2= $_POST['chiffre2'];
                        $operation = $_POST['operation'];
                    }
                    $resultat = NUll;
                    switch ($operation) {
                        case "addition":
                            $resultat=Calculatrice::addition($chiffre1, $chiffre2);
                            break;

                        case "soustraction":
                            $resultat=Calculatrice::soustraction($chiffre1, $chiffre2);
                            break;

                        case "multiplication":
                            $resultat=Calculatrice::multiplication($chiffre1, $chiffre2);
                            break;

                        case "division":
                            $resultat=Calculatrice::division($chiffre1, $chiffre2);
                            break;
                        }
                    $_SESSION['resultat']=$resultat;
                    require("view/viewcalc.php");
                break;
        
                    

            case 'sauvegarder':
                    if (isset($_POST['resultat'])) {
                        $resultat = $_POST['resultat'];
                        $_SESSION['success']=true;
                        Calculatrice::sauvegarder($resultat);
                    }
                    unset($_SESSION['resultat']);
                    require("view/viewcalc.php");
                    unset($_SESSION['success']);
                    
                break;
            case 'viewres':

                require('view/viewres.php');
                break;
        }
            
?>