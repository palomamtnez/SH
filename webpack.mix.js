const mix = require('laravel-mix');
let tailwindcss = require("tailwindcss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require("autoprefixer"), // auto prefix
            tailwindcss("tailwind.config.js"), // import tailwind config
        ],
        clearConsole: true,
        publicPath: "public"
    })
// ]);
;
