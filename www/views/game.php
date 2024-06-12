<div class="row">
    <div class="col-3" id="hero">
        <img src="/public/assets/img/medival_knight.png" alt="héro" class="w-100">
        <div class="hero_information">
            <p class="title">Hero: </p>
            <div><?= $hero ?></div>
        </div>
    </div>
    <div class="col-6">
        <h1 class="text-center">Héro vs Orc</h1>
        <button id="battle" class="btn btn-warning">Bataille!</button>
        <?php while ($orc->getHealth() > 0 && $hero->getHealth() > 0) {
            $orc->attack();
            $hero->attacked($orc->getDamage());
        ?>
            <div class="text-danger">Orc déclenche une attaque!</div>
            <div>Dégats d'Orc: <?= $orc->getDamage(); ?></div>
            <div>Hero:<?= $hero ?></div>
            <div>Orc:<?= $orc ?></div>
            <?php if ($hero->getRage() == 60 && $hero->getHealth() > 0) {
                $orc->attacked($hero->getWeaponDamage());
                $hero->setRage(0);
            ?>
                <div>
                    <p class="text-danger">Héro déclenche une attaque!</p>
                    <div>Hero: <?= $hero ?></div>
                    <div>Orc: <?= $orc ?></div>
                </div>
            <?php
            }
        };
        if ($orc->getHealth() == 0) : ?>
            <div class="text-success fw-bold">Héro a gagné!</div>
        <?php endif;

        if ($hero->getHealth() == 0) : ?>
            <div class="text-success fw-bold">Orc a gagné!</div>
        <?php endif ?>
    </div>
    <div class="col-3" id="orc"> <img src="/public/assets/img/orc.png" alt="orc" class="w-100">
        <div class="orc_information">
            <p class="title">Orc: </p>
            <!-- <div><a href="https://www.moddb.com/groups/orc-clan-and-orcs-fan-group/images/orcs-fear-us-or-get-stomped-gif-pic" title="Orcs Fear us or get stomped - gif pic - ModDB" target="_blank"><img src="https://media.moddb.com/cache/images/groups/1/9/8054/thumb_620x2000/wYAqUqX.gif" alt="Orcs Fear us or get stomped - gif pic" /></a></div> -->
            <div><?= $orc ?></div>
        </div>
    </div>
</div>