<?php
class Categoria
{
    private $animale;
    private $razza;
    private $taglia;

    function __construct($_animale, $_taglia, $_razza = "")
    {
        $this->animale = $_animale;
        $this->taglia = $_taglia;
        $this->razza = $_razza;
    }
}
