<?php

namespace Strategy\Comportement\Cancanement;

class Coincoin implements CancanementInterface
{
    public function cancaner()
    {
        echo 'Je fais coincoin !' . PHP_EOL;
    }
}