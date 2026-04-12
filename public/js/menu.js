const burger = document.getElementById("burger-btn");
const navListe = document.getElementById("nav-liste");

if (burger && navListe) {
  burger.addEventListener("click", function () {
    if (navListe.classList.contains("ouvert")) {
      navListe.classList.remove("ouvert");
    } else {
      navListe.classList.add("ouvert");
    }
  });
}
