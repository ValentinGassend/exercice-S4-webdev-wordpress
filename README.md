# exercice-S4-webdev-wordpress

Site Wordpress exposant les agents de Valorant, exercice réalisé lors du S4 info.

## ⬇️ Installation du projet

Cloner le repo

```bash
git clone https://github.com/ValentinGassend/exercice-S4-webdev-wordpress/
```

Installer les dépendances

```bash
cd .\webdev-wordpress\wordpress\wp-content\themes\s4-webdev\
npm i
```

## 🌳 Structure du projet

```bash
.
├── src
│   │ index.html
│   │ individual.html
│   ├── asset
│   │   ├── fonts
│   │   └── images
│   ├── css
│   │   │ app.scss
│   │   ├── abstract
│   │   ├── base
│   │   ├── components
│   │   ├── layout
│   │   └── pages
│   ├── pages
│   └── js
│   │   │ index.js
│   │   │ individual.js
│   │   │ recipe.js
│   │   └── hbs
└── dist
│   │ index.html
│   │ individual.html
│ webpack.config.js
│ webpack.prod.js
```

## 🏃 Développement

Pour lancer le serveur de développement

```bash
npm run start
```

## 🚧 Build

Pour lancer le build du projet

```bash
npm run build
```
