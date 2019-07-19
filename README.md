# default-laravel
A basic Laravel setup

This is my default Laravel site, ie with all my fundamental packages included, these are:

```
$ composer require barryvdh/laravel-debugbar --dev

$ composer require sven/artisan-view --dev

$ composer require --dev ajthinking/tinx

$ composer require --dev pipe-dream/laravel

$ composer require spatie/laravel-permission
```

Once these are included, then we publish the Spatie migrations:

```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
```

We set up the Laravel Auth routes:

```
php artisan make:auth
```

We take away the `register` route, as I don't often use this:

```
web.php

Auth::routes(['register' => false]);
```

Link the storage files:
```
$ php artisan storage:link
```

Install TailwindCSS and create the `tailwind.config.js` file:
```
$ npm install tailwindcss

$ npx tailwind init
```

And finally we edit `webpack.mix.js` for Tailwind and BrowserSync:
```
const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');

 mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    }).webpackConfig({
        watchOptions: {
            ignored: /node_modules/
        }
    }).browserSync({
        proxy: 'forrestedw.test'
    });
```


