<?php

namespace Strategy\Comportement\Vol;

class VolerAvecDesAiles implements VolInterface
{
    public function voler()
    {
        echo 'Je vole avec mes ailes !' . PHP_EOL;
    }

}