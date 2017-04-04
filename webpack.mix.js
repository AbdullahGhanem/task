const { mix } = require('laravel-mix');

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
   mix.styles([
        "resources/assets/admin/css/font-awesome.css",
        "resources/assets/admin/css/simple-line-icons.css",
        "resources/assets/admin/css/bootstrap.css",
        "resources/assets/admin/css/fileinput.css",
        "resources/assets/admin/css/uniform.default.css",
        "resources/assets/admin/css/ltr/bootstrap-switch.css",
        "resources/assets/admin/css/ltr/components.css",
        "resources/assets/admin/css/ltr/plugins.css",
        "resources/assets/admin/css/ltr/layout.css",
        "resources/assets/admin/css/ltr/darkblue.css",
        "resources/assets/admin/css/ltr/custom.css",
    ], "public/back/css/admin.css").version();
 
    //admin js file
    mix.scripts([
        'resources/assets/admin/js/jquery.js',
        'resources/assets/admin/js/jquery-migrate.js',
        'resources/assets/admin/js/jquery-ui.js',
        'resources/assets/admin/js/bootstrap.js',
        'resources/assets/admin/js/bootstrap-hover-dropdown.js',
        'resources/assets/admin/js/jquery.slimscroll.js',
        'resources/assets/admin/js/jquery.blockui.js',
        'resources/assets/admin/js/jquery.cokie.js',
        'resources/assets/admin/js/jquery.uniform.js',
        'resources/assets/admin/js/bootstrap-switch.js',
        'resources/assets/admin/js/metronic.js',
        'resources/assets/admin/js/layout.js',
        'resources/assets/admin/js/fileinput.js',
    ],'public/back/js/admin.js').version();  

    // ******************************** front end shop ************************************

    //front css file
    mix.styles([
        "resources/assets/front/css/font-awesome.css",
        "resources/assets/front/css/rtl/bootstrap.css",
        "resources/assets/front/css/jquery.fancybox.css",
        "resources/assets/front/css/rtl/owl.carousel.css",
        "resources/assets/front/css/rtl/components.css",
        "resources/assets/front/css/rtl/style.css",
        "resources/assets/front/css/rtl/style-shop.css",
        "resources/assets/front/css/rtl/style-responsive.css",
        "resources/assets/front/css/orange.css",
        "resources/assets/front/css/rtl/custom.css",
    ], "public/front/css/front.css").version();

    //home css file
    mix.styles([
        "resources/assets/front/css/layerslider.css",
        "resources/assets/front/css/style-layer-slider.css"
    ], "public/front/css/home.css").version();

    //product css file
    mix.styles([
        "resources/assets/front/css/uniform.default.css",
        "resources/assets/front/css/jquery-ui.css",
        "resources/assets/front/css/rateit.css",
    ], "public/front/css/product.css").version();

    //core front js file
    mix.scripts([
        'resources/assets/front/js/jquery.js',
        'resources/assets/front/js/jquery-migrate.js',
        'resources/assets/front/js/bootstrap.js',
        'resources/assets/front/js/back-to-top.js',
    ],'public/front/js/core.js').version();

    // layout front js file
    mix.scripts([
        'resources/assets/front/js/jquery.slimscroll.js', 
        'resources/assets/front/js/jquery.fancybox.pack.js',
        'resources/assets/front/js/owl.carousel.js',
        'resources/assets/front/js/layout.js',
    ],'public/front/js/layout.js').version();

    //home front js file
    mix.scripts([
        'resources/assets/front/js/jquery.zoom.js',
        'resources/assets/front/js/bootstrap.touchspin.js',
        'resources/assets/front/js/greensock.js',
        'resources/assets/front/js/layerslider.transitions.js',
        'resources/assets/front/js/layerslider.kreaturamedia.jquery.js',
        'resources/assets/front/js/layerslider-init.js',
    ],'public/front/js/home.js').version();

    //product front js file
    mix.scripts([
        'resources/assets/front/js/jquery.zoom.js', 
        'resources/assets/front/js/bootstrap.touchspin.js',
        'resources/assets/front/js/jquery.uniform.js',
        'resources/assets/front/js/jquery.rateit.js',
    ],'public/front/js/product.js').version();
