<?php

include '../bootstrap.php';

use Strategy\Client\CanardPlastique;
use Strategy\Client\Colvert;
use Strategy\Client\Leurre;
use Strategy\Comportement\Cancanement\Cancan;
use Strategy\Comportement\Cancanement\Muet;
use Strategy\Comportement\Vol\NePasVoler;
use Strategy\Comportement\Vol\VolerAvecDesAiles;

// Liste de comportements
$comportementNePasVoler = new NePasVoler();
$comportementVolerAvecAiles = new VolerAvecDesAiles();

$comportementCancan = new Cancan();
$comportementMuet = new Muet();

// Colvert
echo 'Colvert :' . PHP_EOL;
$canard = new Colvert();
$canard->afficher();
$canard->nager();
$canard->effectuerCancan();
$canard->effectuerVol();

// Canard en plastique
echo PHP_EOL . 'Canard en plastique : ' . PHP_EOL;
$canard = new CanardPlastique();
$canard->afficher();
$canard->nager();
$canard->effectuerCancan();
$canard->effectuerVol();

// Leurre
echo PHP_EOL . 'Leurre : ' . PHP_EOL;
$canard = new Leurre();
$canard->afficher();
$canard->nager();
$canard->effectuerCancan();
$canard->effectuerVol();

// Canard qui évolue
echo PHP_EOL . '=========================' . PHP_EOL;
echo PHP_EOL . 'Evolution d\'un Colvert : ' . PHP_EOL;
echo PHP_EOL . 'Naissance du Colvert : ' . PHP_EOL;
$canard = new Colvert();

$canard->setComportementVol($comportementNePasVoler);
$canard->setComportementCancan($comportementMuet);
$canard->afficher();
$canard->nager();
$canard->effectuerCancan();
$canard->effectuerVol();

echo PHP_EOL . 'Colvert adulte : ' . PHP_EOL;
$canard->setComportementVol($comportementVolerAvecAiles);
$canard->setComportementCancan($comportementCancan);
$canard->afficher();
$canard->nager();
$canard->effectuerCancan();
$canard->effectuerVol();
