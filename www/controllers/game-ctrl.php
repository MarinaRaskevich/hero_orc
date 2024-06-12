<?php
require_once '../helpers/Hero.php';
require_once '../helpers/Orc.php';

$hero = new Hero(1500, 0, 'Épée', 150, 'Bouclier', 450);
$orc = new Orc(250, 0);
// $orc->attack();
// echo ($orc->getDamage());


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/game.php';
include __DIR__ . '/../views/templates/footer.php';
