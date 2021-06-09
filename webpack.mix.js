const mix = require("laravel-mix");

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

// added sass bundle
mix.sass("resources/sass/styles.scss", "public/css")
    .options({
        processCssUrls: false,
    });
mix.copy("resources/favicon.ico", "public/favicon.ico");
mix.copy("resources/css", "public/css");
mix.copy("resources/font", "public/font");
mix.copy("resources/img", "public/img");
mix.copy("resources/js", "public/js");
mix.copy("resources/json", "public/json");
if (mix.inProduction()) {
    mix.version();
}