# TI1 - Découvrir Berlin

Projet de formation de Bryan : site multipage en PHP, HTML, CSS et JavaScript. Navigation, histoire, géographie, culture et galerie photo avec Lightbox.

## Lancer en local
PHP 8 ou plus. Aucune base de données nécessaire.
Depuis le dossier du projet :
```powershell
.\lancer-local.ps1
```
Puis ouvrir http://127.0.0.1:8081/. Autre possibilité : `php -S 127.0.0.1:8081 -t public`.
Sous WampServer, faire pointer l'hôte virtuel vers `public/`.

## Ce qui fonctionne
Pages de contenu, navigation mobile, liens internes, images, galerie agrandie et retour 404.
Le contact est une démonstration de formulaire : il ne sauvegarde pas et n'envoie pas d'email. Un message le précise sur la page.

## Révision technique du 28 septembre 2026
Structure HTML corrigée dans les inclusions ; chemins indépendants du répertoire de lancement ; 404 avec statut HTTP ; état accessible du menu ; images de galerie en grande taille ; chemins Lightbox corrigés ; titres et paragraphes lisibles sur mobile.
Palette, textes, images et organisation des pages conservés. Sources des textes déjà présentes dans les pages ; vérifier les droits des images avant une publication publique.

## Publication GitHub
Versionner le dossier complet, y compris `config.php` : ce fichier ne contient que les chemins et les noms des pages autorisées, aucun secret. GitHub Pages n'exécute pas PHP : utiliser un hébergement PHP pour le site dynamique.
