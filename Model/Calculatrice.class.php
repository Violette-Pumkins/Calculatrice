<?php
    class Calculatrice {
        /**
         * fonction gérant l'addition de deux nombres
         * @param int $c1
         * @param int $c2
         * @return int $resultat
         */
        public static function addition(int $c1, int $c2):int
        { 
            $resultat = $c1 + $c2;
            return $resultat;
        }
        /**
         * fonction gérant la soustraction de deux nombres
         * @param int $c1
         * @param int $c2
         * @return int $resultat
         */
        public static function soustraction( int $c1,  int $c2):int
        {
            $resultat = $c1 - $c2;
            return $resultat;
        }
        /**
         * fonction gérant la multiplication de deux nombres
         * @param int $c1
         * @param int $c2
         * @return int $resultat
         */
        public static function multiplication( int $c1,  int $c2):int
        { 
            $resultat = $c1 * $c2;       
            return $resultat;
        }
        /**
         * fonction gérant la division de deux nombres
         * @param int $c1
         * @param int $c2
         * @return int $resultat
         */
        public static function division(int $c1, int $c2):int
        {
            if($c1||$c2 == 0) $resultat = "on ne peut pas diviser par zéro!";
            
            else{$resultat = $c1 / $c2;
                return $resultat;
            }
        } 

        /**
         * Persiste une valeur dans le fichier de base de données
         * @param int $resultat résultat de l'opération 
         */
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
        
        /**
         * récupère ls résultats pour els afficher
         * @return string[] l'historique des résultats sous liste de strings
         */ 
        public static function recupererliste():array
        {
            $file = 'historique.txt';
            // Ouvre un fichier pour lire un contenu existant
            $current = file_get_contents($file);
            return explode("\n", $current);
        }  
    }
    ?>