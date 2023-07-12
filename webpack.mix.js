let mix = require('laravel-mix');

//js
//mix.js('resources/js/app.js', 'public/build/assets/scripts.js').vue({ version: 3});

//css
mix.postCss('frontend/styles/styles.css', 'public/assets/styles.css');