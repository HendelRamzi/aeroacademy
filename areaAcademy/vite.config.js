import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Admin assets files
                    // Css files
                    // "resources/css/admin/",
                    "resources/css/admin/adminLte.css",


                    // Css plugins files
                    // "resources/css/admin/plugins/",
                    "resources/css/admin/plugins/fontAwsome.css",

                    // Js files
                    // "resources/js/admin/",
                    "resources/js/admin/plugins/jquery.js",
                    "resources/js/admin/plugins/bootstrap.bundle.js",
                    "resources/js/admin/adminLte.js",

            ],
            refresh: true,
        }),
    ],
});
