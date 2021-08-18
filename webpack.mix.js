let mix = require('laravel-mix');
mix.setPublicPath('build');

mix.js('assets/js/app.js', 'js');
mix.sass('assets/scss/app.scss', 'css');
