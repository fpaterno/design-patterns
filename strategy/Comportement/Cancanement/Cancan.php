<?php

namespace Strategy\Comportement\Cancanement;

class Cancan implements CancanementInterface
{
    public function cancaner()
    {
        echo 'Je cancanne !' . PHP_EOL;
    }
}