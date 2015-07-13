var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {
    var siteOutputDir = 'public/';
    
    mix.sass('foundation.scss', siteOutputDir + 'css/foundation.css');
    mix.sass('main.scss', siteOutputDir + 'css/main.css');
    mix.scripts('main.js', siteOutputDir + 'js/main.js');
    
    var bowerComponentsDir = 'vendor/bower_components/';
    
    mix.copy(
        bowerComponentsDir + 'jquery/dist',
        siteOutputDir + 'vendor/jquery'
    );
    
    mix.copy(
        bowerComponentsDir + 'foundation/js/foundation.min.js',
        siteOutputDir + 'vendor/foundation/js/foundation.min.js'
    );
    
    mix.copy(
        bowerComponentsDir + 'font-awesome',
        siteOutputDir + 'vendor/font-awesome'
    );
});
