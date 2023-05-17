<?php
class Categoria
{
    private $animale;
    private $razza;
    private $taglia;

    function __construct($_animale, $_razza, $_taglia)
    {
        $this->animale = $_animale;
        $this->razza = $_razza;
        $this->taglia = $_taglia;
    }
}
