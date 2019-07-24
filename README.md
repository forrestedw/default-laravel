# default-laravel
A basic Laravel setup

This is my default Laravel site. It's the site I often start a project with. It includes the tool packages I use to code, TailwindCSS installed, webpack set up for Tailwind and BrowserSync, and some basic blade template changes.

## What this repo contains

### Packages
These are the packages this repo pulls in:

```
$ composer require barryvdh/laravel-debugbar --dev

$ composer require sven/artisan-view --dev

$ composer require --dev ajthinking/tinx

$ composer require --dev pipe-dream/laravel

$ composer require spatie/laravel-permission
```

And it also has TailwindCSS:
```
$ npm install tailwindcss
```


### Modifications
These are the actions that have already been taken:

Spatie migrations published:
```
$ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
```


The `tailwind.config.js` file created:
```
$ npx tailwind init
```

Laravel Auth routes set up:

```
$ php artisan make:auth
```


The `register` route has been taken away, as I don't often use this:

```php
//web.php

Auth::routes(['register' => false]);
```


And finally we edit `webpack.mix.js` for Tailwind and BrowserSync:
```js
//webpack.mix.js
const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });

mix.webpackConfig({
    watchOptions: {
        ignored: /node_modules/
    }
});

mix.browserSync({
    proxy: 'default-laravel.test'
});
```

## Installation and set up

### Installation
Download it to your local computer with:
```
$ git clone https://github.com/forrestedw/default-laravel.git
```

cd into the repo:
```
$ cd default-laravel
```

Then run composer to download all dependencies:
```
$ composer update
```


### Set up
Make your .env :
```
$ cp .env.example .env
```

Generate an application key:
```
$ php artisan key:generate
```

Link the storage files:
```
$ php artisan storage:link
```


