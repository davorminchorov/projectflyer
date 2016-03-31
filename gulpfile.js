var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        .sass('app.scss')
        .scripts([
            'libs/jquery.js',
            'libs/bootstrap.js',
            'libs/sweetalert-dev.js',
            'libs/lity.min.js'
        ], './public/js/libs.js')
        .styles([
            'libs/bootstrap.css',
            'libs/sweetalert.css',
            'libs/lity.min.css'
        ], './public/css/libs.css');
});
