<?php
class Prodotto
{
    public $nome;
    public $prezzo;
    public $marca;
    public $peso;
    public $tipo_articolo;
    public $immagine;

    function __construct($_nome, $_prezzo, $_marca, $_tipo_articolo, $_immagine, $_peso = "")
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->peso = $_peso;
        $this->tipo_articolo = $_tipo_articolo;
        $this->immagine = $_immagine;
    }
}
