<?php
require __DIR__ . '/../helpers/Character.php';
require __DIR__ . '/../helpers/Hero.php';
require __DIR__ . '/../helpers/Orc.php';

$hero = new Hero(health: 1300, rage: 0, weapon: 'Épée', weaponDamage: 150, shield: 'Bouclier', shieldValue: 450);
$orc = new Orc(health: 250, rage: 0);

$gameResults = [];
$result = '<div class="d-flex justify-content-between fw-bold"><div>Héro: ' . $hero->__toString() . '</div><div>Orc: ' . $orc->__toString() . '</div></div>';
array_push($gameResults, $result);

while ($orc->getHealth() > 0 && $hero->getHealth() > 0) {
    $orc->attack();
    $damageOrc = $orc->getDamage();
    $hero->attacked($damageOrc);

    $result = '<div class="my-2 fs-4">Orc déclenche une attaque!</div>
    <div>Dégâts d\'Orc: ' . $damageOrc . '</div>
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

$isHeroWinner = $orc->getHealth() == 0 ? true : false;


$data = [
    'gameResults' => $gameResults,
    'winner' => $isHeroWinner,
];

echo json_encode($data);
