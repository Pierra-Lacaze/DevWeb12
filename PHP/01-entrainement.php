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

        echo '<h2>02 - Variables : déclaration / affectation / type</h2>';
        // Une variable est un espace nommé permettant de conserver une valeur.
        // Une variable se déclare avec le signe $
        // Caractères autorisés :  a-z A-Z 0-9 _
        // PHP est sensible à la casse (une minuscule n'est pas équivalent à une majuscule)
        // Une variable ne peut pas commencer par un chiffre !

        // gettype() est une fonction prédéfinie (déjà inscrite au langage) permettant de nous renvoyer une chaine de caractère représentant le type d'une variable.

        $a = 123;   // Déclaration de la variable nommée 'a' et affection de la valeur numérique 123
        echo $a;
        echo gettype($a); // Integer = un entier
        echo '<br>';

        $a = 1.5; // On change la valeur contenue dans la variable $a
        echo $a;
        echo gettype($a); // double ou float = chiffre décimal
        echo '<br>';

        $a = 'Une chaine';
        echo $a;
        echo gettype($a); // string = une chaine de caractères
        echo '<br>';

        $b = true;
        echo $b; // Nous renvoie 1  car true = 1 = existe  les booléens ne sont pas sensibles à la casse, true = TRUE, false = FALSE
        echo gettype($b); // boolean // vrai ou faux // 1 ou 0
        echo '<br>';

        // Il reste deux autres types que l'on verra sur des chapitres suivants (array/object)

        echo '<h2>03 - Concaténation</h2>';
        // la concaténation consiste à assembler des chaines de caractères (sous forme de texte ou comprisent dans des variables) les unes avec les autres.
        // caractère de concaténation : le point . (il est possible d'utiliser la virgule aussi, mais seulement avec echo)
        // le caractère de concaténation peut toujours se traduire par "suivi de"

        $x = 'Bonjour';
        $y = 'tout le monde';

        // Sans concaténation :
        echo $x;
        echo ' ';
        echo $y;
        echo '<br>';

        // Avec concaténation
        echo $x . ' ' . $y . '<br>';

        // Concaténation avec la virgule seulement avec echo
        echo $x, ' ', $y, '<br>';

        // Concaténation lors de l'affectation
        $prenom = 'Pierre';
        $prenom = 'Alexandre'; // cela écrase la valeur précédente 
        echo $prenom . '<br>'; // affiche Alexandre

        // Pour rajouter sans écraser :
        $prenom2 = 'Pierre';
        $prenom2 = $prenom2 . '-Alexandre';
        echo $prenom2 . '<br>';
        // Raccourci d'écriture
        $prenom3 = 'Pierre';
        $prenom3 .= '-Alexandre'; // avec le .= on rajoute sans écraser

        echo $prenom3 . '<br>';

?>
</body>
</html>