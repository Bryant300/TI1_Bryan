<nav class="navigation" id="navigation">

    <button class="burger-btn" id="burger-btn" aria-label="Ouvrir le menu">
        <span class="burger-barre"></span>
        <span class="burger-barre"></span>
        <span class="burger-barre"></span>
    </button>

    <ul class="nav-liste" id="nav-liste">
        <li><a href="./"              class="nav-lien">Accueil</a></li>
        <li><a href="./?p=geographie" class="nav-lien">Géographie</a></li>
        <li><a href="./?p=histoire"   class="nav-lien">Histoire</a></li>
        <li><a href="./?p=culture"    class="nav-lien">Culture</a></li>
        <li><a href="./?p=galerie"    class="nav-lien">Galerie</a></li>
        <li><a href="./?p=contact"    class="nav-lien">Contact</a></li>
        <li><a href="./?p=liens"      class="nav-lien">Liens</a></li>
    </ul>

</nav>
<script>const burger = document.getElementById("burger-btn");
const navListe = document.getElementById("nav-liste");

burger.addEventListener("click", function () {
  if (navListe.classList.contains("ouvert")) {
    navListe.classList.remove("ouvert");
  } else {
    navListe.classList.add("ouvert");
  }
});
</script>