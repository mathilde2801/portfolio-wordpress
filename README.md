# Portfolio WordPress avec Roots/Bedrock

## Explication des Étapes Réalisées
1. **Installation de Bedrock** : Mise en place de WordPress via Roots/Bedrock avec Composer.
2. **Thème Enfant** : Création d’un thème enfant basé sur Astra (`astra-child`).
3. **Custom Post Type (CPT)** : Ajout d’un CPT "Portfolio" avec taxonomies personnalisées (`cpt-portfolio.php`).
4. **Champs ACF** : Configuration de champs personnalisés (client, date, lien, image) pour les réalisations.
5. **Templates** :
   - `front-page.php` : Page d’accueil avec nom, présentation, compétences (grille), et 3 réalisations.
   - `archive-portfolio.php` : Liste toutes les réalisations en grille.
   - `single-portfolio.php` : Page individuelle pour chaque réalisation avec détails ACF.
6. **Design Personnalisé** : CSS avec fond sombre (#1B0C1A), palette (#765D67, #6D3C52, etc.), et centrage.
7. **Menu** : Ajout du lien "/portfolio/" dans la navbar via WordPress.
8. **GitHub** : Versionnement sur GitHub avec changement d’URL du dépôt.

## Difficultés Rencontrées
- **Rectangle indésirable** : Un rectangle hérité d’Astra entourait le contenu de `single-portfolio.php`. Résolu en forçant `background: transparent !important` et en supprimant bordures/ombres.
- **Centrage** : Les éléments étaient décalés à gauche. Corrigé avec `margin: 0 auto` et `justify-content: center` dans les grilles.
- **Affichage des Réalisations** : Les 3 réalisations sur `front-page.php` n’étaient pas sur une ligne. Ajusté avec `grid-template-columns: repeat(3, 1fr)`.
- **Changement d’URL Git** : Difficulté à relier à un nouveau dépôt GitHub. Résolu avec `git remote set-url`.

## Comment Installer et Lancer le Projet
1. **Cloner ou Télécharger** :
   - Cloner : `git clone https://github.com/ton-username/nouveau-portfolio.git`
   - Ou dézipper `portfolio-export.7zip`.
2. **Installer les Dépendances** :
   - Exécuter `composer install` à la racine pour installer les dépendances Bedrock.
3. **Configurer la Base de Données** :
   - Créer une base MySQL (ex. `portfolio_db`).
   - Importer `portfolio_db.sql` : `mysql -u ton_utilisateur -p portfolio_db < portfolio_db.sql`.
4. **Configurer `.env`** :
   - Copier `.env.example` en `.env`.
   - Remplir les infos de la base (DB_NAME, DB_USER, DB_PASSWORD) et les clés WordPress.
5. **Lancer le Site** :
   - Utiliser un serveur local (MAMP, XAMPP, etc.).
   - Accéder via `http://localhost/port/bedrock/web`.

## Notes
- Fichiers fournis : ZIP (`portfolio-export.zip`) avec fichiers + base SQL.

## Lien du github
`https://github.com/mathilde2801/portfolio-wordpress`