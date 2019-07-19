const mix = require('laravel-mix');

// remove comment for tailwind
// const tailwindcss = require('tailwindcss');

 mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        // remove comments for tailwind
        // processCssUrls: false,
        // postCss: [ tailwindcss('./tailwind.config.js') ],
    }).webpackConfig({
        watchOptions: {
            ignored: /node_modules/
        }
    }).browserSync({
        proxy: 'forrestedw.test'
    });
