<?php

include './models/Horoscope.php';
include './models/Ressource.php';

$horoscopes = [
    // Bélier
    new Horoscope(
        'Bélier',
        'Votre code sera truffé d\'erreurs cette semaine. Mais vous gardez confiance: l\'ordinateur va finir par céder.',
        'images/zodiac/012-aries.svg',
        '21 mars',
        '19 avr.'
    ),
    // Taureau
    new Horoscope(
        'Taureau',
        'Vous ne croyez pas en l\'astrologie de toute façon, donc si vous lisez ça, c\'est que vous n\'êtes pas Taureau, mais plutôt Balance.',
        'images/zodiac/011-taurus.svg',
        '20 avr.',
        '21 mai'
    ),
];

$resources = [
    new Ressource(
        'https://fr.wikipedia.org/wiki/Astrologie',
        'L\'astrologie sur Wikipedia.',
    ),
    new Ressource(
        'https://www.amazon.fr/Bible-lAstrologie-Judy-Hall/dp/281320238X/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=bible+astrologie&qid=1599851245&sr=8-1',
        'La bible de l\'astrologie sur Amazon',
    ),
    new Ressource(
        'http://astroo.com/',
        'Astroo, le site pour calculer votre propre thème astral',
    ),
];
