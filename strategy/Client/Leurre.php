<?php

namespace Strategy\Client;

use Strategy\Comportement\Cancanement\Muet;
use Strategy\Comportement\Vol\NePasVoler;

final class Leurre extends Canard
{
    public function __construct()
    {
        $this->comportementVol = new NePasVoler();
        $this->comportementCancan = new Muet();
    }

    /**
     * Affiche le canard
     */
    public function afficher()
    {
        echo 'Je suis un leurre !' . PHP_EOL;
    }
}