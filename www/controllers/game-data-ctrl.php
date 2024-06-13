<?php
require_once '../helpers/Hero.php';
require_once '../helpers/Orc.php';

$hero = new Hero(1300, 0, 'Épée', 150, 'Bouclier', 450);
$orc = new Orc(250, 0);

$gameResults = [];
$result = '<div class="d-flex justify-content-between"><div>Héro: ' . $hero->__toString() . '</div><div>Orc: ' . $orc->__toString() . '</div></div>';
array_push($gameResults, $result);

while ($orc->getHealth() > 0 && $hero->getHealth() > 0) {
    $orc->attack();
    $hero->attacked($orc->getDamage());

    $result = '<div class="my-2 fs-4">Orc déclenche une attaque!</div>
    <div>Dégâts d\'Orc: ' . $orc->getDamage() . '</div>
    <div>Hero:</div>
    <div>Niveau de santé: ' . $hero->getHealth() . '</div>
    <div>Niveau de rage: ' . $hero->getRage() . '</div>
    <div>Capacité d\'armure: ' . $hero->getShieldValue() . '</div>';
    array_push($gameResults, $result);

    if ($hero->getRage() == 60 && $hero->getHealth() > 0) {
        $orc->attacked($hero->getWeaponDamage());
        $hero->setRage(0);

        $result = '<div>
            <p class="fs-4">Héro déclenche une attaque!</p>
                <div>Dégâts de Héro: ' . $hero->getWeaponDamage() . '</div>
            <div>Orc: ' . $orc . '</div>
        </div>';
        array_push($gameResults, $result);
    }
};

$isHeroWin = $orc->getHealth() == 0 ? true : false;


$data = [
    'gameSteps' => $gameResults,
    'winner' => $isHeroWin,
];

echo json_encode($data);
