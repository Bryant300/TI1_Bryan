document.getElementById('contact-demo').addEventListener('submit', function (event) {
  event.preventDefault();
  document.getElementById('contact-feedback').textContent =
    'Formulaire valide. Démonstration uniquement : aucun message envoyé.';
});
