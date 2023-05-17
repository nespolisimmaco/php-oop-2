<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Categoria.php";

class Cuccia extends Prodotto
{
    public $animale;
    public $materiale;
    public $forma;

    function __construct(Categoria $_animale, $_materiale, $_forma, $_nome, $_prezzo, $_marca, $_peso)
    {
        parent::__construct($_nome, $_prezzo, $_marca, $_peso);
        $this->animale = $_animale;
        $this->materiale = $_materiale;
        $this->forma = $_forma;
    }
}
