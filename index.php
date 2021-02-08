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
                        <img class="sign-icon" src="<?= $horoscope['image'] ?>" alt="Icône <?= $horoscope['name'] ?>" />
                        <h3 class="sign-name"><?= $horoscope['name'] ?></h3>
                        <div class="sign-date">21 mars - 19 avr.</div>
                        <p class="sign-description">
                            <?= $horoscope['description'] ?>
                        </p>
                    </li>
                    <?php endforeach; ?>

                </ol>
            </section>

            <section id="resources">
                <h2>Ressources</h2>
                <ul>
                    <li>
                        <a target="_blank" href="https://fr.wikipedia.org/wiki/Astrologie">
                            L'astrologie sur Wikipedia
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.amazon.fr/Bible-lAstrologie-Judy-Hall/dp/281320238X/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=bible+astrologie&qid=1599851245&sr=8-1">
                            La bible de l'astrologie sur Amazon
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://astroo.com/">
                            Astroo, le site pour calculer votre propre thème astral
                        </a>
                    </li>
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
