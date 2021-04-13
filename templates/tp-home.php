<?php
/*
Template Name: Accueil
*/

// Load header.php
get_header(); ?>
<section style="background-color: #1f1f1f" class=" container">
    <h1 style="color: white;"> INSTYNCT Bluprint V3.0</h1>
</section>
<section class="container" style="background-color: #d8d8c8 ;">
    <h1>Style Guide Example</h1>
</section>
<section>

    <div class="container">

        <h1 class="title-mega">Titre Mega</h1>
        <h1>Titre H1</h1>
        <h2>Titre H2</h2>
        <h3>Titre H3</h3>
        <h4>Titre H4</h4>
        <h5>Titre Étapes</h5>
        <h6>Titre Catégories</h6>
    </div>
    <div class="container">
        <h2>Liste à points</h2>
        <ul class="point-list">
            <li>
                <p>[ES6] for JavaScript (transpiling with [Babel] and linting with [ESLint])</p>
            </li>
            <li>
                <p>[SASS] preprocessor for CSS with [SASS Guidelines]</p>
            </li>
            <li>
                <p>[Gulp 4](https://gulpjs.com/)</p>
            </li>
            <li>
                <p>[Webpack 5](https://webpack.js.org/) to manage, compile and optimize the theme's asset</p>
            </li>
        </ul>
        <h2>Liste à bordure</h2>
        <ul data-scroll data-scroll-speed="1" class="border-list">
            <li>
                <p>[ES6] for JavaScript (transpiling with [Babel] and linting with [ESLint])</p>
            </li>
            <li>
                <p>[SASS] preprocessor for CSS with [SASS Guidelines]</p>
            </li>
            <li>
                <p>[Gulp 4](https://gulpjs.com/)</p>
            </li>
            <li>
                <p>[Webpack 5](https://webpack.js.org/) to manage, compile and optimize the theme's asset</p>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="container">
            <h2>Texte Primaire</h2>
            <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.</p>
        </div>
        <div class="container">
            <h2>Texte Secondaire</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.</p>
        </div>
        <div class="container">
            <h2>Texte Exergue</h2>
            <p class="exergue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.</p>
        </div>
        <div class="container">
            <h2>Texte Citations</h2>
            <p class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, cupiditate. Eligendi asperiores eum aspernatur saepe repudiandae sed est inventore vero sequi tenetur. Vel eligendi adipisci molestiae placeat expedita quis facilis.</p>
            <p class="quote-name">Ghandi</p>
        </div>
    </div>
</section>

<?php $wysiwyg = get_field('wysiwyg') ?>
<section class="container" style="background-color: #d8d8c8;">
    <h2>Section Wysiwyg (avec classe)</h2>
    <?= $wysiwyg ?>
</section>

<?php
// Load footer.php
get_footer(); ?>