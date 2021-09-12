const mix = require('laravel-mix');

mix.js('src/app.js', 'public/js')
    .postCss('src/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
  ])
  mix.browserSync({
  	proxy: 'cookies.test',
	files: ["css/app.css", "public/*.php", "public/*.html"]
  });