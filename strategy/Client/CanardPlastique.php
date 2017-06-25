<?php

namespace Strategy\Client;

use Strategy\Comportement\Cancanement\Cancan;
use Strategy\Comportement\Cancanement\Coincoin;
use Strategy\Comportement\Vol\NePasVoler;

final class CanardPlastique extends Canard
{
    public function __construct()
    {
        $this->comportementVol = new NePasVoler();
        $this->comportementCancan = new Coincoin();
    }

    /**
     * Affiche le canard
     */
    public function afficher()
    {
        echo 'Je suis un Canard en plastique !' . PHP_EOL;
    }
}