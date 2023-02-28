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

    <?php
    $nbExo = 1;
    ?>

    <h1>Exercices PHP: Challenge 2</h1>

    <hr />

    <p>Dans ce challenge on va voir comment traiter nos formulaires avec PHP</p>

    <h2>Exercice
        <?php
        echo ($nbExo++);
        ?> : votre premier formulaire
    </h2>
    <ul>
        <li>
            Créez un formulaire HTML, avec comme attributs:
            <ul>
                <li>action="challenge2.php" (le nom de cette page)</li>
                <li>method="GET"</li>
            </ul>
        </li>
        <li>Dans ce formulaire, ajoutez un input type="text", avec name="prenom"</li>
        <li>Et un input type="submit", qui aura value="Envoyer"</li>
    </ul>

    <!-- insérez votre form ici -->

    <ul>
        <li>En PHP, créez un variable $prenom avec une valeur par défaut</li>
        <li>Vérifiez si la variable $_GET['prenom'] est définie (isset)</li>
        <li>Si elle l'est, changez la valeur de $prenom en conséquence, et affichez la</li>
    </ul>
    <?php
    //
    ?>
    <p>Bonjour, <b>prénom?</b></p>



    <h2>Exercice
        <?php
        echo ($nbExo++);
        ?> : un formulaire pour additionner
    </h2>
    <ul>
        <li>En HTML, créez un formulaire avec 2 champs de type nombre</li>
        <li>Ajoutez un bouton pour envoyer le formulaire</li>
        <li>En PHP, récupérez ces 2 paramètres, additionnez les, et affichez le résultat</li>
    </ul>
    <form>

    </form>
    <?php

    ?>



    <h2>Exercice
        <?php
        echo ($nbExo++);
        ?> : un formulaire plus complet
    </h2>
    <ul>
        <li>En HTML, créez un formulaire avec :
            <ul> 
                <li>1 sélecteur pour choisir un plat parmis 3 (je vous laisse improviser, vous pouvez proposer 3 types
                    de burger)</li>
                <li>3 checkbox qui représentent les suppléments (fromage, bacon, et sauce par ex.)</li>
                <li>1 input de type datetime pour connaître le moment de la réservation</li>
                <li>2 radio button pour décider si c'est sur place ou à emporter</li>
                <li>Un input de type text pour entrer un numéro de carte bleu. Voici le mien pour tester :
                    4242-4242-4242-4242</li>
            </ul>
        </li>
        <li>Pour votre formulaire, mettez cette fois la méthode POST (c'est celle que l'on utilise le plus souvent pour l'envoi de donnéees)</li>
        <li>et comme action une nouvelle page PHP que vous allez créer (reservation.php)</li>
        <li>Dans cette page réservation, faites en sorte
            <ul>
                <li>D'afficher un message "Réservation validée" avec un récap des infos, si toutes les infos ont bien été remplies</li>
                <li>D'afficher un message "Réservation incomplète" avec un lien qui redirige vers cette page, pour remplir à nouveau le form</li>
            </ul>
        </li>
        <li>Vous pouvez ajouter plusieurs fonctionnalités, comme par exemple un calcul du coût total, des vérifications plus poussées (sur la date par exemple).</li>
        <li>Si vous avez vu ça dans le module, vous pouvez sauvegarder la commande dans un fichier texte</li>
    </ul>

    <!-- insérez votre form ici -->




    <h2>(Bonus) Exercice
        <?php
        echo ($nbExo++);
        ?> : mini Quiz
    </h2>
    <p>Vous pouvez faire cet exercice dans une autre page pour simplifier</p>
    <ul>
        <li>Créez un formulaire avec des questions.</li>
        <li>Chaque question peut être une div, avec un paragraphe pour la question</li>
        <li>Et selon la question, vous pouvez mettre différents type d'input (radio, checkbox, text)</li>
        <li>A l'envoi du formulaire, on vérifiera la véracité des questions, et on donnera un score</li>
    </ul>

</body>

</html>