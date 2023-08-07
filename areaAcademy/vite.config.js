import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                "resources/sass/app.scss",


                // Admin assets files
                    // Css files
                    // "resources/css/admin/",
                    "resources/css/admin/adminLte.css",


                    // Js files
                    // "resources/js/admin/",
                    "resources/js/admin/plugins/jquery.js",
                    "resources/js/admin/plugins/bootstrap.bundle.js",
                    "resources/js/admin/adminLte.js",






                // Website assets files

                    // CSS files
                    "resources/css/style.css",
                    "resources/css/responsive.css",


                    // CSS modules css files
                    "resources/css/modules/header.css",
                    "resources/css/modules/banner.css",
                    "resources/css/modules/services.css",
                    "resources/css/modules/about.css",
                    "resources/css/modules/footer.css",
                    "resources/css/modules/contact.css",


                    // css plugins style
                    "resources/css/plugins/owl.css",
                    "resources/css/plugins/magnific-popup.css",
                    "resources/css/plugins/nice-select.css",
                    "resources/css/plugins/font-awesome.min.css",
                    "resources/css/plugins/flaticon.css",




                    // JS files
                    'resources/js/app.js',


                    "resources/js/jquery.js",
                    'resources/js/custom.js',


                    
                    
                    
                    // Js plugins script
                    'resources/js/plugins/scrollbar.js',
                    "resources/js/plugins/owl.js",
                    "resources/js/plugins/jquery.magnific-popup.min.js",
                    "resources/js/plugins/jquery.nice-select.min.js",
                    "resources/js/plugins/parallax.min.js",
                    "resources/js/plugins/wow.js",
                    "resources/js/plugins/knob.js",
            ],
            refresh: true,
        }),
    ],
});
