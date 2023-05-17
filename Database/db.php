<?php
require_once __DIR__ . "/../Models/Cibo.php";
require_once __DIR__ . "/../Models/Gioco.php";
require_once __DIR__ . "/../Models/Cuccia.php";
require_once __DIR__ . "/../Models/Categoria.php";

// Cane
$dogs = [
    new Cibo(new Categoria("Cane", "Media", "Beagle"), "Salmone", "Crocchette", "Monge All Breeds", "48,90€", "MONGE", "Cibo", "5kg"),
    new Gioco(new Categoria("Cane", "Piccola"), "Plastica", "Osso", "Osso di plastica", "5,30€", "CAMON", "Gioco"),
    new Cuccia(new Categoria("Cane", "Grande"), "Alluminio", "Rettangolare", "Brandina in alluminio", "44,99€", "MAST", "Cuccia"),
];

// Gatto
