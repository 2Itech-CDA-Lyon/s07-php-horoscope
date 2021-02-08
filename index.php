<?php include './data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2i horoscope</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div id="container">
        <header>
            <div class="center-container">
                <h1>
                    M2i horoscope
                    <hr class="separator" />
                </h1>
                <p id="subtitle">
                    Apprentis développeurs, cet horoscope est fait pour vous! Vous codez, vous codez, mais on n'est jamais à l'abri des surprises, bonnes ou mauvaises, que nous réserve le destin&hellip; Alors, ne vous laissez pas prendre au dépourvu! Entre deux <em>pull requests</em>, prenez le temps de lire ces prévisions réalisés par notre spécialiste! 
                </p>
            </div>
        </header>

        <main>
            <section id="horoscope">
                <h2>Horoscope du jour</h2>
                <ol id="sign-grid">
                    
                    <?php foreach ($horoscopes as $horoscope): ?>
                    <li class="sign">
                        <img class="sign-icon" src="<?= $horoscope->getImage() ?>" alt="Icône <?= $horoscope->getName() ?>" />
                        <h3 class="sign-name"><?= $horoscope->getName() ?></h3>
                        <div class="sign-date"><?= $horoscope->getStartDate() ?> - <?= $horoscope->getEndDate() ?></div>
                        <p class="sign-description">
                            <?= $horoscope->getDescription() ?>
                        </p>
                    </li>
                    <?php endforeach; ?>

                </ol>
            </section>

            <section id="resources">
                <h2>Ressources</h2>
                <ul>

                    <?php foreach($resources as $resource): ?>
                    <li>
                        <a target="_blank" href="<?= $resource->getSrc() ?>">
                            <?= $resource->getDescription() ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    
                </ul>
            </section>
        </main>

        <footer>
            <div id="copyright" class="center-container">
                Copyright &copy; DWWM 09/2020
            </div>
        </footer>
    </div>
</body>
</html>
