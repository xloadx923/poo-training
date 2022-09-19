<?php

// require 'App/Autoloader.php';
// \Infos\Autoloader::register();
spl_autoload_register();
use App\Objects\Student;
use App\Objects\Primary;
use App\Objects\College;
use App\Objects\HighSchool;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
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
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                <?php

                    $student1 = new App\Objects\Student1_1("Polo", "Marco", 25, "Bac Pro");
                    $student2 = new App\Objects\Student1_1("De Gama", "Vasco", 22, "Bac Commercial");

                    var_dump($student1, $student2);

                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">

            <?php
                $student1 = new App\Objects\Student1_2("Polo", "Marco", 25, "Bac Pro");
                $student2 = new App\Objects\Student1_2("De Gama", "Vasco",  22, "Bac Commercial");

                $student1->setGrade("Terminale");
                $student2->setGrade("Prépa");

                echo $student1->getGrade()."<br>".$student2->getGrade();

            ?>

            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">

            <?php
                $student1 = new Student("Polo", "Marco",new DateTime( "1995-09-12"), "Bac Pro");
                $student2 = new Student("De Gama", "Vasco",  new DateTime("1997-03-02"), "Bac Commercial");

                echo $student1->getFirstName()." : ".$student1->getGrade()."<br>".$student2->getFirstName()." : ".$student2->getGrade();
            ?>

            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">

            <?php

                $now = new DateTime();
                $student1->setBirthday(new DateTime("1995-08-01"));
                $student1->setBirthday(new DateTime("1995-08-01"));
                $student2->setBirthday(new DateTime("1994-04-15"));

                $birthday1 = $student1->getBirthday();
                $birthday2 = $student2->getBirthday();

                $student1->setBirthAge($birthday1, $now);
                $student2->setBirthAge($birthday2, $now);

                echo $student1->getFirstName()." : ".$student1->getBirthAge()."<br>".$student2->getFirstName()." : ".$student2->getBirthAge();

            ?>

            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">

            <?php

            $student1->setSchool("Saint Joseph");
            $student2->setSchool("François 1er");

            echo $student1->getFirstname()." : ".$student1->getSchool()."<br>";
            echo $student2->getFirstname()." : ".$student2->getSchool()."<br>";

            ?>

            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en classe de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">

            <?php
                $student1 = new Student("Polo", "Marco",new DateTime( "1995-09-12"), "Bac Pro");
                $student2 = new Student("De Gama", "Vasco",  new DateTime("1997-03-02"), "Bac Commercial");

                $now = new DateTime();
                $student1->setBirthday(new DateTime("1995-08-01"));
                $student2->setBirthday(new DateTime("1994-04-15"));

                $birthday1 = $student1->getBirthday();
                $birthday2 = $student2->getBirthday();

                $student1->setBirthAge($birthday1, $now);
                $student2->setBirthAge($birthday2, $now);

                Student::setIntroduction("Bonjour, je m'appelle ##lastname## ##firstname##, j'ai ##age## ans et je vais à l'école ##school## en classe de ##grade##.<br/>");

                echo $student1->showPresentation() . $student2->showPresentation();

            ?>

            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>