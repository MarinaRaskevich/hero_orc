const imageHero = document.querySelector("#imgHero");
const imageOrc = document.querySelector("#imgOrc");
const gameResult = document.querySelector("#gameResult");

battle.addEventListener("click", () => {
  window.location.reload();
});

if (gameResult.getAttribute("data-result") == "hero") {
  imageHero.classList.toggle("zoomed");
} else {
  imageOrc.classList.toggle("zoomed");
}
