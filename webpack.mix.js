let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
// mix.js('resources/assets/js/app.js', 'public/js').extract(['vue']);
// mix.js('resources/assets/js/test/test.js', 'public/js');
mix.js('resources/assets/js/Students/index.js', 'public/js/students');
mix.js('resources/assets/js/Recruitments/index.js', 'public/js/recruiments').sass('resources/assets/sass/recruitment/index.sass', 'public/css/recruitment');
mix.js('resources/assets/js/Recruitments/index_id.js', 'public/js/recruiments');
mix.js('resources/assets/js/Admin/index.js', 'public/js/admin');
mix.js('resources/assets/js/Admin/list_recruitments_wait.js', 'public/js/admin');
mix.js('resources/assets/js/Admin/list_recruitments_wait_id.js', 'public/js/admin');
mix.js('resources/assets/js/Employers/cactintuyendungcuaban.js', 'public/js/employers');