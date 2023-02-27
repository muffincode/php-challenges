<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap');

        body {
            font-family: "Roboto Mono", mono;
            color: #272838;
            margin: 0;
            padding: 3em;
            box-sizing: border-box;
        }

        h2 {
            color: #EB9486;
            margin-top: 3em;
        }
    </style>
    <title>Challenges PHP : #2</title>
</head>

<body>
    <h1>Exercices PHP: Challenge 3</h1>

    <hr />

    <p>Dans ce challenge on va voir comment accéder à nos bases de données</p>

    <h2>Exercice 1 : Se connecter, et SELECT</h2>
    <ul>
        <li>
            En suivant le tutoriel, connectez vous à la base de données
            <ul>
            <li>host : localhost</li>
            <li>dbname : projets-php</li>
            <li>user : root</li>
            <li>password : (vide)</li>
            </ul>
        </li>
        <li>Créez une variable qui stocke votre requête SQL qui permet d'accéder à toustes les utilisateurices</li>
        <li>prepare</li>
        <li>execute</li>
        <li>fetchAll</li>
    </ul>

    <?php
    try
    {
        // Connexion à la base
        $db = new PDO("mysql:host=localhost;dbname=projets-php","root", "");
    }
    catch (PDOException $e)
    {
        // Echec de la connexion
        exit("Error: " . $e->getMessage());
    }

    $sqlQuery = 'SELECT * FROM users';
    $statement = $db->prepare($sqlQuery);
    $statement->execute();
    $users = $statement->fetchAll();

    // On affiche chaque recette une à une
    foreach ($users as $u) {
        echo("<p>".$u['name']."</p>");
    }
    ?>



    <h2>Exercice 2 : Des SELECT plus complexes</h2>
    <ul>
        <li>En reprenant la structure de l'exercice précédant, affichez seulement les utilisateurices qui sont en France ; puis celleux dont le prénom commence par C</li>
    </ul>
    <p>Indice: WHERE, LIKE</p>

    <?php
        $sqlQuery = 'SELECT * FROM users WHERE country = "fr"';
        $statement = $db->prepare($sqlQuery);
        $statement->execute();
        $users = $statement->fetchAll();
    
        // On affiche chaque recette une à une
        foreach ($users as $u) {
            echo("<p>".$u['name']."</p>");
        }
    ?>
</body>

</html>