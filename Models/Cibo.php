<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Categoria.php";

class Cibo extends Prodotto
{
    public $animale;
    public $gusto;
    public $consistenza;

    function __construct(Categoria $_animale, $_gusto, $_consistenza, $_nome, $_prezzo, $_marca, $_tipo_articolo, $_immagine, $_peso)
    {
        parent::__construct($_nome, $_prezzo, $_marca, $_tipo_articolo, $_immagine, $_peso);
        $this->animale = $_animale;
        $this->gusto = $_gusto;
        $this->consistenza = $_consistenza;
    }
}
