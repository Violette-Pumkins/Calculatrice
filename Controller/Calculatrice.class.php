<?php
    class Calculatrice {
        public static function addition($c1, $c2)
        { 
            $resultat = $c1 + $c2;
            return $resultat;
        }
        public static function soustraction($c1, $c2)
        {
            $resultat = $c1 - $c2;
            return $resultat;
        }
        public static function multiplication($c1, $c2)
        { 
            $resultat = $c1 * $c2;       
            return $resultat;
        }
        public static function division($c1, $c2)
        {
            if($c1||$c2 == 0) $resultat = "on ne peut pas diviser par zéro!";
            
            else{$resultat = $c1 / $c2;
                return $resultat;
            }
        } 
        public static function sauvegarder($resultat)
        {
            $file = 'historique.txt';
            // Ouvre un fichier pour lire un contenu existant
            $current = file_get_contents($file);
            // Ajoute une personne
            $current .=strval($resultat). "\n";
            // Écrit le résultat dans le fichier
            file_put_contents($file, $current);
        }  
        public static function recupererliste()
        {
            $file = 'historique.txt';
            // Ouvre un fichier pour lire un contenu existant
            $current = file_get_contents($file);
            return explode("\n", $current);
        }  
    }
    ?>