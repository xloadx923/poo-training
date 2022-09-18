<?php

require 'App/Autoloader.php';

\Infos\Autoloader::register();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des écoles</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des écoles</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.
                <br>
                Créer 2 écoles et afficher leurs propriétés.
            </p>
            <div class="exercice-sandbox">
            <?php

                $school = new \Infos\School();
                $school->setSchoolName("Les Ormeaux");
                $school->setCity("Le Havre");

                echo "L'école \" ".$school->getSchoolName()." \" est située dans la ville suivante : ".$school->getCity();

            ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée.
                <br>
                Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : "CP", "CM2", "5ème", "Terminale", ...).
                <br>
                Créer une école de chaque type.
            </p>
            <div class="exercice-sandbox">
            <?php

                $primary = new \Infos\Primary();

                $primary->setCity('Le Havre');
                $primary->setSchoolName('Jehan De Grouchy');
                $primary->setGrades('CP');
                $primary->setGrades('CE1');
                $primary->setGrades('CM1');
                $primary->setGrades('CM2');

                $college = new \Infos\College();

                $college->setCity('Le Havre');
                $college->setSchoolName('Les Ormeaux');
                $college->setGrades('sixième');
                $college->setGrades('cinquième');
                $college->setGrades('quatrième');
                $college->setGrades('troisème');

                $highSchool = new \Infos\HighSchool();

                $highSchool->setCity('Le Havre');
                $highSchool->setSchoolName('Claude Monet');
                $highSchool->setGrades('seconde');
                $highSchool->setGrades('première');
                $highSchool->setGrades('terminale');

                $allSchools = [(array) $primary, (array) $college, (array) $highSchool];
                var_dump($allSchools);
            ?>
            </div>
        </section>


        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveu scolaire.
                <br>
                Tester la méthode créée.
            </p>
            <div class="exercice-sandbox">
            <?php

                function filteredBySchool(array $merging, string $search, string $key):array {
                    $returnmap = [];
                    foreach ($merging as $school){
                        $map = array_filter(array_values($school['grades']),fn($s)=>$s == $search);
                        if(!empty($map)){
                            $returnmap = $map;
                            $returnmap[] = $school[$key];
                            return $returnmap;
                        }
                    }
                }

                var_dump(filteredBySchool($allSchools, 'première', 'schoolname'));

            ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Remplacer les propriétés "école" des élèves et des professeurs par la classe créée.
                <br>
                Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.
            </p>
            <div class="exercice-sandbox">

            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>