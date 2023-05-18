<?php
trait Caratteristiche
{
    private $colore;
    private $eta;

    public function setColore($_colore)
    {
        $this->colore = $_colore;
    }

    public function setEta($_eta)
    {
        if (is_int($_eta)) {
            throw new Exception("Errore! Non inserire un numero, le opzioni sono: Cucciolo | Adulto.");
        }
        $this->eta = $_eta;
    }

    public function getColore()
    {
        return $this->colore;
    }

    public function getEta()
    {
        return $this->eta;
    }
}
