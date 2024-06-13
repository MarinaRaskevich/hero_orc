<div class="container-fluid h-100 pt-3">
    <div class="row gx-3 pt-4 h-100">
        <div class="col-4 h-100" id="hero">
            <img src="/public/assets/img/medival_knight.png" alt="héro" id="imgHero">
        </div>
        <div class="col-4 d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center">
                <h1 class="text-center fw-bold" id='gameName'>Héro vs Orc</h1>
                <button id="battle">Bataille!</button>
            </div>
            <div class="fw-bold pt-5 mt-5" id="gameResult"></div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-modal d-none" data-bs-toggle="modal" data-bs-target="#modal">
                Afficher la progression de cette bataille
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 h-100" id="orc">
            <img src="/public/assets/img/orc.png" alt="orc" id="imgOrc">
        </div>
    </div>
</div>