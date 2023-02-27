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
        <title>Challenges PHP</title>
    </head>
<body>
    
    <h1>Challenges PHP</h1>

    <hr/>

    <nav>
        <ul>
            <?php
                for ($exo = 1 ; $exo <= 3 ; $exo++ ) {
                    echo "<li><a href='challenge{$exo}.php'>Challenge {$exo}</a></li>";
                }
            ?>
        </ul>
    </nav>

</body>
</html>