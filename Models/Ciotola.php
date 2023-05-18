<?php
require_once __DIR__ . "/../Traits/Caratteristiche.php";

class Ciotola
{
    use Caratteristiche;
    public $nome;

    function __construct($_nome, $_colore, $_eta)
    {
        $this->nome = $_nome;
        $this->colore = $_colore;
        try {
            $this->setEta($_eta);
        } catch (Exception $e) {
            $this->eta = $e->getMessage();
        }
    }
}
