let mix = require('laravel-mix');
require('laravel-mix-versionhash');

mix.setPublicPath('./build');

mix.browserSync({
    proxy: 'http://localhost/',
    injectChanges: true,
    open: false,
    files: [
        'build/**/*.{css,js}'
    ]
});

mix.js('assets/js/app.js', 'js');
mix.sass('assets/scss/app.scss', 'css');

if (mix.inProduction()) {
    mix.versionHash();
    mix.sourceMaps();
}