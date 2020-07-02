# Instynct Blueprint 2.0 [Webpack]

**_Theme Wordpress_**

## Technologies web utilisée

- [ES6](https://github.com/lukehoban/es6features#readme) for JavaScript (transpiling with [Babel](https://babeljs.io/) and linting with [ESLint](https://eslint.org/))

- [SASS](http://sass-lang.com/) preprocessor for CSS with [SASS Guidelines](https://sass-guidelin.es/#the-7-1-pattern)

- [Gulp 4](https://gulpjs.com/)

- [Webpack 4](https://webpack.js.org/) to manage, compile and optimize the theme's asset

## Librairies Inclue

- [jQuery](https://jquery.com/)
- [ScrollMagic](https://scrollmagic.io/) - [Animation.gsap](https://scrollmagic.io/docs/animation.GSAP.html) - [GSAP](https://greensock.com/gsap/)
- [Flickity](https://flickity.metafizzy.co/)

## Pré-requis

- Node 12
- NPM 6
- Gulp 4

## Setup

- Au début d'un nouveau projet, choisir le blueprint a la création d'un nouveau site dans flywheel.
- Ensuite ouvrir le dossier du theme (blueprint)

Pour installer les dépendances, il faut lancer le script ci dessous dans le terminal :

    npm install

Pour lancer le watcher et browsersync :

    npm run start

Avant d'envoyer en production, il faut lancer ce script pour minimiser les assets :

    npm run build

## BrowserSync

Pour activer BrowserSync lors de la compilation des assets, il faut allez dans

    le_theme>gulp>core>config>browser-sync.js

Ensuite modifier le dernier block de code comme suit:

        module.exports = deepMerge({
    	    proxy:  'url_du_site.local',
    	    host:  'url_du_site.local',
    	    open:  'external',
        });
