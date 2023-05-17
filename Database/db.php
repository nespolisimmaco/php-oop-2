<?php
require_once __DIR__ . "/../Models/Cibo.php";
require_once __DIR__ . "/../Models/Gioco.php";
require_once __DIR__ . "/../Models/Cuccia.php";
require_once __DIR__ . "/../Models/Categoria.php";

// Cane
$animals = [
    new Cibo(new Categoria("Cane", "Media", "Beagle"), "Salmone", "Crocchette", "Monge All Breeds", "48,90€", "MONGE", "Cibo", "img/monge-all-breeds.jpg", "5kg"),
    new Gioco(new Categoria("Cane", "Piccola"), "Plastica", "Osso", "Osso di plastica", "5,30€", "CAMON", "Gioco", "img/osso.jpeg"),
    new Cuccia(new Categoria("Cane", "Grande"), "Alluminio", "Rettangolare", "Brandina in alluminio", "44,99€", "MAST", "Cuccia", "img/brandina.jpg"),
    new Cibo(new Categoria("Gatto", "Media", "Persiano"), "Salmone", "Crocchette", "Natural Trainer Gatto", "14,49€", "NATURAL TRAINER", "Cibo", "img/natural-trainer.jpg", "1.5kg"),
    new Gioco(new Categoria("Gatto", "Piccola"), "Gomma", "Palla", "Tiragriaffi Cat Pole", "29,50€", "UNITED PETS", "Gioco", "img/tiragraffi.jpg"),
    new Cuccia(new Categoria("Gatto", "Grande"), "Stoffa", "Rotonda", "Cuccia Igloo", "39,99€", "TRIXIE", "Cuccia", "img/cuccia-igloo.jpg"),
];
