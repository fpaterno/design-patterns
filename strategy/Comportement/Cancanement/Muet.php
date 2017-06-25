<?php

namespace Strategy\Comportement\Cancanement;

class Muet implements CancanementInterface
{
    public function cancaner()
    {
        echo 'Je ne sais pas cancanner !' . PHP_EOL;
    }
}