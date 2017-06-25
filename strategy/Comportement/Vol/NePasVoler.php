<?php

namespace Strategy\Comportement\Vol;

class NePasVoler implements VolInterface
{
    public function voler()
    {
        echo 'Je ne sais pas voler !' . PHP_EOL;
    }

}