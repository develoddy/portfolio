import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
                
            ],
            refresh: true,
            sourcemap: true,
        }),  
    ],
    optimizeDeps: {
        include: ['jquery'] // Asegúrate de incluir jQuery en optimizeDeps
    },
});

