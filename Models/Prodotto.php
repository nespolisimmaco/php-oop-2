<?php
class Prodotto
{
    public $nome;
    public $prezzo;
    public $marca;
    public $peso;

    function __construct($_nome, $_prezzo, $_marca, $_peso)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->peso = $_peso;
    }
}
