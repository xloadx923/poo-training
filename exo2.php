<?php

// require 'App/Autoloader.php';
// \Infos\Autoloader::register();
spl_autoload_register();
use App\Objects\Teacher;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">
                <?php

                    $teacher1 = new Teacher("Lavanant", "Clément");
                    $teacher2 = new Teacher("Persy", "Damien");

                    var_dump($teacher1,$teacher2);
                ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">
            <?php

                $teacher1 = new Teacher("Lavanant", "Clément");
                $teacher2 = new Teacher("Persy", "Damien");

                $teacher1->setSchool("Saint Rose");
                $teacher2->setSchool("Saint Joseph");

                echo $teacher1->getLastName()." : ".$teacher1->getSchool()."<br>".$teacher2->getLastName()." : ".$teacher2->getSchool();
            ?>
            </div>
        </section>


        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">
                <?php

                $teacher1 = new Teacher("Lavanant", "Clément");
                $teacher2 = new Teacher("Persy", "Damien");

                $teacher1->setSchool("Saint Rose");
                $teacher2->setSchool("Saint Joseph");

                $teacher1->addSubject("anglais");
                $teacher1->addSubject("histoire");
                $teacher2->addSubject("français");
                $teacher2->addSubject("géographie");
                $teacher2->addSubject("mathématiques");

                var_dump($teacher1, $teacher2);

                ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">
                <?php

                /* suppression  et vérification pour teacher1 */
                //unset($teacher1);
                if(!isset($teacher1)){ echo "Le professeur 1 n'existe pas !<br>"; }
                else{ echo $teacher1->showPresentation()."<br>"; }

                if(!isset($teacher2)){ echo "Le professeur 2 n'existe pas !<br>"; }
                else{ echo $teacher2->showPresentation()."<br>"; }

                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>