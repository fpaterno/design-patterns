<?php

namespace Strategy\Client;

use Strategy\Comportement\Cancanement\Cancan;
use Strategy\Comportement\Vol\VolerAvecDesAiles;

final class Colvert extends Canard
{
    public function __construct()
    {
        $this->comportementVol = new VolerAvecDesAiles();
        $this->comportementCancan = new Cancan();
    }

    /**
     * Affiche le canard
     */
    public function afficher()
    {
        echo 'Je suis un Colvert !' . PHP_EOL;
    }
}