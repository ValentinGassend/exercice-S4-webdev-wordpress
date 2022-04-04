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
yarn install
```

## 🌳 Structure du projet

```bash
.
├── resources
│   │ footer.php
│   │ function.php
│   │ index.php
│   │ screenshot.png
│   │ style.css
│   ├── asset
│   │   │ config.json
│   │   ├── build
│   │   ├── fonts
│   │   ├── scripts
│   │   ├── styles
│   │   └── images
│   └── views
│   │   │ 404.blade.php
│   │   │ archive-agent.blade.php
│   │   │ front-page.blade.php
│   │   │ search.blade.php
│   │   │ single-agent.blade.php
│   │   │ single.blade.php
│   │   │ template-custom.blade.php
│   │   ├── components
│   │   ├── layout
│   │   └── partials
├── resources
│   │ assets.php
│   │ theme.php
│   │ view.php
└── app
│   │ admin.php
│   │ helpers.php
│   │ filters.php
│   │ setup.php
│   └── controllers
│   │   │ App.php
│   │   │ FrontPage.php
│ yarn.lock
```

## 🏃 Développement

Pour lancer le serveur de développement

```bash
yarn run start
```

## 🚧 Build

Pour lancer le build du projet

```bash
yarn run build
```
