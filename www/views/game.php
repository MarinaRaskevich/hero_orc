<div class="container-fluid h-100 pt-3">
    <div class="row gx-3">
        <div class="col-4 pt-3" id="hero">
            <img src="/public/assets/img/medival_knight.png" alt="héro" id="imgHero">
            <div class="hero_information text-center">
                <p class="title">Héro: </p>
                <div class="fw-bold"><?= $hero ?></div>
            </div>
        </div>
        <div class="col-4 d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center">
                <h1 class="text-center fw-bold" id='gameName'>Héro vs Orc</h1>
                <button id="battle">Bataille!</button>
            </div>
            <div class="fw-bold pt-5 fs-2 mt-5" id="gameResult" data-result="<?= $isHeroWin ? 'hero' : 'orc' ?>"><?= $isHeroWin ? 'Héro a gagné!' : 'Orc a gagné!' ?></div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Afficher la progression du jeu
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pt-3" id="orc"> <img src="/public/assets/img/orc.png" alt="orc" id="imgOrc">
            <div class="orc_information text-center">
                <p class="title">Orc: </p>
                <!-- <div><a href="https://www.moddb.com/groups/orc-clan-and-orcs-fan-group/images/orcs-fear-us-or-get-stomped-gif-pic" title="Orcs Fear us or get stomped - gif pic - ModDB" target="_blank"><img src="https://media.moddb.com/cache/images/groups/1/9/8054/thumb_620x2000/wYAqUqX.gif" alt="Orcs Fear us or get stomped - gif pic" /></a></div> -->
                <div class="fw-bold"><?= $orc ?></div>
            </div>
        </div>
    </div>
</div>