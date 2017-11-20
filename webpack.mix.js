let mix = require('laravel-mix');

mix.sass('source/sass/main.scss', 'web/styles')
   .copyDirectory('source/images', 'web/images')
   .options({
      processCssUrls: false
  });
