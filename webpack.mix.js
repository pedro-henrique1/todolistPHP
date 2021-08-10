const mix = require('laravel-mix');

mix.browserSync('http://127.0.0.1:8000');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
