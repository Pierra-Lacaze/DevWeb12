<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement PHP</title>
    <style>
        h2 {
            background-color: steelblue;
            color: white;
            padding: 20px;
        }

        .conteneur {
            width: 1000px;
            border: 1px solid;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="conteneur">
        <h2>Entrainement PHP</h2>
         <!-- 
            Il est possible d'écrire de l'html dans un fichier.php
            En revanche, l'inverse n'est pas possible !
    -->
    <?php 
    // ouverture de la balise PHP

    // Hello, c'est le debut du cours PHP, on y va
    echo "Je suis une instruction d'affichage";

    
        // La doc officielle :
        // https://www.php.net/

        // Les bonnes pratiques et conventions d'écriture.
        //-------------------------------------------------
        // https://phptherightway.com // en anglais
        // https://eilgin.github.io/php-the-right-way/  // en fr

        // https://www.php-fig.org/psr/

        // Pour se tenir au courant :
        // https://www.reddit.com/r/PHP


        // SOMMAIRE :
        // --------------
        // 01 - Instruction d'affichage
        // 02 - Variables : déclaration / affectation / type
        // 03 - Concaténation
        // 04 - Guillemets et apostrophes
        // 05 - Constantes
        // 06 - Conditions & opérateurs de comparaison
        // 07 - Fonctions prédéfinies
        // 08 - Fonctions utilisateur
        // 09 - Boucles
        // 10 - Inclusions
        // 11 - Tableaux de données array
        // 12 - Classes & Objets

        echo '<h2>01 - Instruction d\'affichage</h2>';
        // echo est une instruction du langage permettant de générer un affichage.

        // /!\ ATTENTION Chaque instruction en PHP doit se terminer par un ;
        echo 'Bonjour';
        echo ' à tous';
        echo '<br>';

        print 'Nous sommes mardi<br>'; // autre instruction permettant de générer un affichage, quasiment similaire à echo
        // Nous utiliserons toujours echo dans le cadre du cours
        // Il est possible de faire la concaténation avec le point ou avec la virgule
        // print n'accepte pas la concaténation avec la virgule !

?>
</body>
</html>