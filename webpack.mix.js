const mix = require('laravel-mix');
const local = require('./resources/js/utils/local-config');
require('laravel-mix-versionhash');
require('laravel-mix-tailwind');

mix.setPublicPath('./assets');

if (mix.inProduction()) {
    mix
        .versionHash()
        .sourceMaps();
}

mix.webpackConfig({
    externals: {
        "jquery": "jQuery",
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'assets/**/*.{css,js}',
            'templates/**/*.php'
        ]
    });
}

mix
    .tailwind()
    .js('resources/js/app.js', 'js')
    .sass('resources/scss/app.scss', 'css');
