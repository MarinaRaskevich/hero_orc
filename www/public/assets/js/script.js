const imageHero = document.querySelector("#imgHero");
const imageOrc = document.querySelector("#imgOrc");
const gameResult = document.querySelector("#gameResult");
const modal = document.querySelector(".modal-body");
const btnModal = document.querySelector(".btn-modal");

let counterHero = 0;
let counterOrc = 0;

battle.addEventListener("click", function () {
  fetch("game-data-ctrl.php")
    .then((response) => response.json())
    .then((data) => {
      winner(data.winner);
      gameSteps(data.gameResults);
    })
    .catch((error) => {
      console.error(error);
    });
});

const winner = (winner) => {
  if (winner) {
    imageHero.classList.add("zoomed");
    imageHero.classList.remove("dezoomed");
    imageOrc.classList.remove("zoomed");
    imageOrc.classList.add("dezoomed");
    counterOrc = 0;
    counterHero++;
  } else {
    imageHero.classList.remove("zoomed");
    imageHero.classList.add("dezoomed");
    imageOrc.classList.add("zoomed");
    imageOrc.classList.remove("dezoomed");
    counterHero = 0;
    counterOrc++;
  }

  gameResult.innerHTML = winner
    ? "Héro a gagné! (x" + counterHero + ")"
    : "Orc a gagné! (x" + counterOrc + ")";
};

const gameSteps = (gameResults) => {
  btnModal.classList.remove("d-none");
  btnModal.classList.add("d-block");
  modal.innerHTML = "";
  gameResults.forEach((result) => {
    modal.innerHTML += result;
  });
};
