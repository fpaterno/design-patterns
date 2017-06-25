<?php

namespace Strategy\Client;

use Strategy\Comportement\Cancanement\CancanementInterface;
use Strategy\Comportement\Vol\VolInterface;

abstract class Canard
{
    /**
     * @var ComportementVol
     */
    protected $comportementVol;

    /**
     * @var CancanementInterface
     */
    protected $comportementCancan;

    /**
     * Affiche le canard
     * @return void
     */
    abstract public function afficher();

    /**
     * Setteur du comportement vol
     * @param VolInterface $comportementVol
     */
    public function setComportementVol(VolInterface $comportementVol)
    {
        $this->comportementVol = $comportementVol;
    }

    /**
     * Setteur du comportement cancan
     * @param CancanementInterface $comportementCancan
     */
    public function setComportementCancan(CancanementInterface $comportementCancan)
    {
        $this->comportementCancan = $comportementCancan;
    }

    /**
     * Effectue une nage
     * @return void
     */
    public function nager()
    {
        echo 'Je nage !' . PHP_EOL;
    }

    /**
     * Effectue le vol du canard
     * @return void
     */
    public function effectuerVol()
    {
        $this->comportementVol->voler();
    }

    /**
     * Effectue un cancanement
     * @return void
     */
    public function effectuerCancan()
    {
        $this->comportementCancan->cancaner();
    }
}