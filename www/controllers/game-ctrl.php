<?php
require_once '../helpers/Hero.php';
require_once '../helpers/Orc.php';

$hero = new Hero(1300, 0, 'Épée', 150, 'Bouclier', 450);
$orc = new Orc(250, 0);
// $orc->attack();
// echo ($orc->getDamage());

$game = [];

while ($orc->getHealth() > 0 && $hero->getHealth() > 0) {
    $orc->attack();
    $hero->attacked($orc->getDamage());

    $result = '<div class="text-danger">Orc déclenche une attaque!</div>
    <div>Dégats d\'Orc: ' . $orc->getDamage() . '</div>
    <div>Hero:</div>
    <div>Niveau de santé: ' . $hero->getHealth() . '</div>
    <div>Niveau de rage: ' . $hero->getRage() . '</div>
    <div>Capacité d\'armure: ' . $hero->getShieldValue() . '</div>';
    array_push($game, $result);

    if ($hero->getRage() == 60 && $hero->getHealth() > 0) {
        $orc->attacked($hero->getWeaponDamage());
        $hero->setRage(0);

        $result = '<div>
            <p class="text-danger">Héro déclenche une attaque!</p>
            <div>Orc: ' . $orc . '</div>
        </div>';
        array_push($game, $result);
    }
};

$isHeroWin = $orc->getHealth() == 0 ? true : false;

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/game.php';
include __DIR__ . '/../views/templates/footer.php';
