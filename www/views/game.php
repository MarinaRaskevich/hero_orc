<div class="row">
    <div class="col-3"><?= $orc ?></div>
    <div class="col-6">
        <?php while ($orc->getHealth() > 0 && $hero->getHealth() > 0) :
            if ($hero->getRage() == 60 && $hero->getHealth() > 0) {
                $orc->attacked($hero->getWeaponDamage());
                $hero->setRage(0);
        ?>
                <div>
                    <p>Héro déclenche une attaque!</p>
                    <div><?= $hero ?></div>
                    <div><?= $orc ?></div>
                </div>
            <?php
            }
            $orc->attack();
            $hero->attacked($orc->getDamage());
            ?>
            <div>Orc déclenche une attaque!</div>
            <div>Dégats d'Orc: <?= $orc->getDamage(); ?></div>
            <div><?= $hero ?></div>
            <div><?= $orc ?></div>
        <?php
        endwhile ?>
    </div>
    <div class="col-3"><?= $hero ?></div>
</div>