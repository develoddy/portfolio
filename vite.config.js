import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'; //import laravel from 'laravel-vite-plugin';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', 
                'resources/sass/app.scss',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
            ],
            refresh: [
                ...refreshPaths,
                //'app/Livewire/**',
                'app/Filament/**'
              ],
        }),
    ],

    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '$': 'jQuery',
        }
    },
    build: {
      target: 'esnext',
      chunkSizeWarningLimit: 1600,
    }
});