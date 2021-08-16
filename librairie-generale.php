    <?php
    #________________________________________________________________________________________
    # Retourne  '1er' ou '1er' si le nombre 1 est passé comme argument
    # ou  le 'nombre passé en argument' s’il est diff de 1
    function er($intEntier, $binExposant = true){
        return $intEntier . ($intEntier == 1 ? ($binExposant ? "<sup>er</sup>" : "er") : "");
    }



    #________________________________________________________________________________________
    # Convertir n'importe quelle portion de chaine in entier
    function convertitSousChaineEnEntier($strChaine, $intDepart, $intLongueur)    {
        $intEntier = intval(substr($strChaine, $intDepart, $intLongueur));
        return $intEntier;
    }



    #________________________________________________________________________________________
    # la fonction ajouteZeros qui permet de préfixer un nombre d’une série de zéros.
    function ajouteZeros($numValeur, $intLargeur){
        $strFormat = "%0" . $intLargeur . "d";
        return sprintf($strFormat, $numValeur);
    }
    ?>