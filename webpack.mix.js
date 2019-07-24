const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });

mix.browserSync({
    proxy: 'default-laravel.test'
});