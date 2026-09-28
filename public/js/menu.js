const burger = document.getElementById("burger-btn");
const navListe = document.getElementById("nav-liste");
if (burger && navListe) {
  burger.addEventListener("click", function () {
    const ouvert = navListe.classList.toggle("ouvert");
    burger.setAttribute("aria-expanded", String(ouvert));
    burger.setAttribute("aria-label", ouvert ? "Fermer le menu" : "Ouvrir le menu");
  });
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && navListe.classList.contains("ouvert")) {
      navListe.classList.remove("ouvert");
      burger.setAttribute("aria-expanded", "false");
      burger.setAttribute("aria-label", "Ouvrir le menu");
      burger.focus();
    }
  });
}
